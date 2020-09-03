<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\Breed;

class PageController extends Controller
{
    public function index()
    {
        //15
        $dogs = Dog::all();

        //16
        $retrieversId = Breed::where('name','Labrador Retriever')->value('id');
        $retrievers = Dog::where('breed_id',$retrieversId)->get();

        //17
        $breedNames = Breed::pluck('name');

        //18
        $allRetrieverBreeds = Breed::where('name', 'LIKE', '%Retriever')->get();
        $allRetrieverDogs = [];
        foreach ($allRetrieverBreeds as $allRetrieverBreed) {
            $allRetrieverDogs[] = Dog::where('breed_id', $allRetrieverBreed->id)->get();
        }

        //19
        $oldDogs = Dog::where('date_of_birth','<', '2010-01-01')->get();

        //20
        $notRetrievers = Breed::where('name', 'NOT LIKE', '%Retriever')->orderBy('name')->get();
        $notRetrieverDogs = [];
        foreach ($notRetrievers as $notRetriever) {
            $notRetrieverDogs[] = Dog::where('breed_id', $notRetriever->id)->get();
        }
        //return $notRetrieverDogs;


        return view('index', compact('dogs', 'retrievers', 'breedNames', 'allRetrieverDogs', 'oldDogs', 'notRetrieverDogs'));
    }
}
