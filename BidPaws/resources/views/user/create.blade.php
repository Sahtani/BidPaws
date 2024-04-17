@extends('layouts.base')

@section('content')

    <div class="bg-gray-100 px-6 sm:py-20 py-10 font-[sans-serif]">
        <div class="max-w-screen-xl mx-auto text-950">
            <h1 class="text-2xl max-sm:text-3xl font-extrabold leading-tight mb-4">Publier une annonce
            </h1>
            <div class="bg-white max-w-screen-xl mx-auto grid md:grid-cols-3  ">

            </div>
            <p class="text-lg mb-8">Experience excellence like never before with our exclusive products and services.</p>


            <form action="{{ url('user/annonces') }}" method="POST" enctype="multipart/form-data" class="mx-auto">
                @csrf
                <div class="grid grid-cols-3 gap-6">
                    <div class="grid col-start-1  col-end-3">
                        <div class="flex flex-col">
                            <div class="flex ">
                                <label for="">Listing title</label>
                                <span class="text-yell">*</span>
                            </div>
                            <div class="mt-4">
                                <input type="text" name="title" value="{{ old('title') }}"
                                    class="block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
                            </div>
                            <x-input-error :messages="$errors->get('title')" class="my-2" />
                        </div>
                    </div>
                    <div class="grid col-start-1  col-end-1">
                        <div class="flex flex-col">
                            <div class="flex ">
                                <label for="">Category</label>
                                <span class="text-yell">*</span>
                            </div>
                            <div class="mt-4">
                                <input type="text" name="category" value="{{ old('category') }}"
                                    class="block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
                            </div>
                            <x-input-error :messages="$errors->get('category')" class="my-2" />
                        </div>
                    </div>
                    <div class="grid col-start-2  col-end-2">
                        <div class="flex flex-col">
                            <div class="flex ">
                                <label for="">Price</label>
                                <span class="text-yell">*</span>
                            </div>
                            <div class="mt-4">
                                <input type="number" name="price" value="{{ old('price') }}"
                                    class="block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
                            </div>
                            <x-input-error :messages="$errors->get('price')" class="my-2" />
                        </div>
                    </div>
                    <div class="grid col-start-1 col-end-1">
                        <div class="flex flex-col">
                            <div class="flex ">
                                <label for="">City</label>
                                <span class="text-yell">*</span>
                            </div>
                            <div class="mt-4">
                                <input type="text" name="location" value="{{ old('city') }}"
                                    class="block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
                            </div>
                            <x-input-error :messages="$errors->get('location')" class="my-2" />
                        </div>
                    </div>
                    <div class="grid col-start-2 col-end-2">
                        <div class="flex flex-col">
                            <div class="flex ">
                                <label for="">Age</label>
                                <span class="text-yell">*</span>
                            </div>
                            <div class="mt-4">
                                <input type="text" name="age" value="{{ old('age') }}"
                                    class="block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
                            </div>
                            <x-input-error :messages="$errors->get('age')" class="my-2" />
                        </div>


                    </div>

                </div>
                <div class="mb-8 mt-6">
                    <label class="text-xl font-bold mb-4">Description <span class="text-red-500">*</span></label></br>
                    <textarea name="description" class="border-2 border-gray-500">
                      {{ old('title') }}"
                    </textarea>
                    <x-input-error :messages="$errors->get('description')" class="my-2" />
                </div>
                <div class=" mt-6">
                    <h3 class="text-xl font-bold mb-4">Upload photos (3 photos max.)
                        <span class="text-red-500">*</span>
                    </h3></br>
                    <div class="col-span-full">
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="images[]" type="file" multiple class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('images')" class="my-2" />
        </div>



        <div class="flex items-center justify-end mt-10 mr-20">
            <button type="submit" class="flex items-center justify-center gap-2 bg-yellow-500 text-white font-bold py-3 px-4 rounded">
                <span>Publier une annonce</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M5.00488 11.525V7.075H0.854883V5.125H5.00488V0.65H7.00488V5.125H11.1549V7.075H7.00488V11.525H5.00488Z" fill="#FDFDFE"></path>
                </svg>
            </button>
        </div>
        


        </form>

    </div>
    </div>
    </div>
    <script>
        // Récupérer l'élément <select>
const selectVilles = document.getElementById('selectVilles');

// URL de l'API pour récupérer la liste des villes
const apiUrl = 'https://calm-fjord-14795.herokuapp.com/api/villes';

// Effectuer une requête GET vers l'API
fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    // Parcourir les données pour ajouter chaque ville comme une option dans le <select>
    data.forEach(ville => {
      const option = document.createElement('option');
      option.value = ville.id; // Vous pouvez utiliser l'ID de la ville comme valeur de l'option
      option.textContent = ville.nom; // Utiliser le nom de la ville comme texte de l'option
      selectVilles.appendChild(option);
    });
  })
  .catch(error => {
    console.error('Erreur lors de la récupération des villes:', error);
  });

    </script>
@endsection
