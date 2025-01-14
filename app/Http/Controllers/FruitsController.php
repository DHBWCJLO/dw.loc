<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\FruitImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FruitsController extends Controller
{
    // Display a listing of fruits
    public function index()
    {
        // Load fruits with related country name and images
        $fruits = Fruit::with(['country', 'images'])->get();

        // Format the response to include country name and image URLs
        $fruits = $fruits->map(function ($fruit) {
            return [
                'id' => $fruit->id,
                'name' => $fruit->name,
                'description' => $fruit->description,
                'origin' => $fruit->country ? $fruit->country->name : 'Unknown',
                'seasonality' => $fruit->seasonality,
                'storage_place' => $fruit->storage_place,
                'storage_period' => $fruit->storage_period,
                'images' => $fruit->images->map(function ($image) {
                    return asset('storage/images/' . $image->filename);
                }),
            ];
        });

        return response()->json($fruits, 200);
    }

    // Store a newly created fruit in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'origin' => 'required|integer|exists:countries,id',
            'seasonality' => 'required|string|in:Summer,Autumn,Winter,Spring',
            'storage_place' => 'required|string|in:WoodBox,Fridge,Bottle,PlasticBox,OpenAir',
            'storage_period' => 'required|string|in:Week,2Weeks,3Weeks,Month,Quarter,Year'
        ]);

        $fruit = Fruit::create($request->all());
        return response()->json($fruit, 201);
    }

    // Display the specified fruit
    public function show($id)
    {
        $fruit = Fruit::find($id);
        if ($fruit) {
            return response()->json($fruit, 200);
        } else {
            return response()->json(['message' => 'Fruit not found'], 404);
        }
    }

    // Update the specified fruit in storage
    public function update(Request $request, $id)
    {
        $fruit = Fruit::find($id);
        if ($fruit) {
            $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'description' => 'nullable|string',
                'origin' => 'sometimes|required|integer|exists:countries,id',
                'seasonality' => 'sometimes|required|string|in:Summer,Autumn,Winter,Spring',
                'storage_place' => 'sometimes|required|string|in:WoodBox,Fridge,Bottle,PlasticBox,OpenAir',
                'storage_period' => 'sometimes|required|string|in:Week,2Weeks,3Weeks,Month,Quarter,Year'
            ]);

            $fruit->update($request->all());
            return response()->json($fruit, 200);
        } else {
            return response()->json(['message' => 'Fruit not found'], 404);
        }
    }

    // Remove the specified fruit from storage
    public function destroy($id)
    {
        $fruit = Fruit::find($id);
        if ($fruit) {
            $fruit->delete();
            return response()->json(['message' => 'Fruit deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Fruit not found'], 404);
        }
    }

    public function uploadImage(Request $request, Fruit $fruit)
    {
        // Validate the incoming request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Store the image using the public disk
        $path = $request->file('image')->store('fruits', 'public');

        // Create a new FruitImage record
        $fruitImage = new FruitImage();
        $fruitImage->fruit_id = $fruit->id;
        $fruitImage->filename = $path;
        $fruitImage->save();

        return response()->json(['message' => 'Image uploaded successfully', 'filename' => $path], 200);
    }

    // views section
    // Display a view listing all fruits
    public function listView()
    {
        return view('fruits.list');
    }
}
