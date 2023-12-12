<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;

class BackgroundController extends Controller
{
    public function index()
    {
        return view('background');
    }

    public function get_backgrounds()
    {
        $start = request()->start;
        $length = request()->length;

        $query = Background::query();

        $totalData = $query->count();

        $backgrounds = $query->orderBy('created_at', 'asc')
            ->skip($start)
            ->take($length)
            ->get();

        $data = [];

        foreach ($backgrounds as $key => $background) {
            $data[] = [
                'DT_RowIndex' => $key + 1,
                'background_name' => $background->background_name,
                'background_image' => $background->background_image,
                'status' => $background->status,
                'background_id' => $background->background_id,
            ];
        }

        return response()->json([
            "draw" => intval(request()->draw),
            "recordsTotal" => $totalData,
            "recordsFiltered" => $totalData,
            "data" => $data,
        ]);
    }

    public function create_background(Request $request)
    {
        $backgroundName = $request->input('imageName');
        $imageFile = $request->file('imageFile');

        $filename = $backgroundName . '.' . $imageFile->getClientOriginalExtension();
        $imageFile->move(public_path('backgrounds'), $filename);

        $background = new Background();
        $background->background_name = $backgroundName;
        $background->background_image = 'backgrounds/' . $filename;
        $background->save();

        return response()->json(['success' => 'Background uploaded successfully']);
    }

    // grab one background based on backrgound_id
    public function get_one_background(Request $request)
    {
        $id = $request->input('background_id');

        $background = Background::find($id);

        return response()->json($background);
    }

    public function get_background_dropdown()
    {
        $backgrounds = Background::select('background_id', 'background_name', 'background_image')->get();
        return response()->json($backgrounds);
    }

    public function set_background(Request $request)
    {
        $background_id = $request->input('background_id');

        // Set all backgrounds to disabled
        Background::where('status', 'active')->update(['status' => 'disabled']);

        // Set the selected background to active
        $background = Background::find($background_id);
        $background->status = 'active';
        $background->save();

        return response()->json(['success' => 'Background status updated successfully']);
    }


    public function update_background(Request $request)
    {
        $background = Background::find($request->input('backgroundId'));

        if ($request->hasFile('editImageFile')) {
            $imageFile = $request->file('editImageFile');
            $filename = $request->input('editImageName') . '.' . $imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('backgrounds'), $filename);
            $background->background_image = 'backgrounds/' . $filename;
        }

        $background->background_name = $request->input('editImageName');
        $background->save();

        return response()->json(['success' => 'Background updated successfully']);
    }


    public function delete_background(Request $request) // Using the ID from the URL parameter
    {
        $background_id = $request->input('background_id');

        $background = Background::find($background_id);

        // delete the image file
        $image_path = public_path($background->background_image);

        // check if the file exists
        if (file_exists($image_path)) {
            // delete the file
            unlink($image_path);
        }

        $background->delete();

        return response()->json(['success' => 'Background deleted successfully']);
    }

    public function get_active_background()
{
    $activeBackground = Background::where('status', 'active')->first(); // Assuming 'active' is the status for active backgrounds
    return response()->json(['background_image' => $activeBackground->background_image]);
}

}