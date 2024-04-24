@extends('layouts.base')

@section('content')
    <div class="bg-gray-100 px-6 sm:py-20 py-10 font-[sans-serif]">
        <div class="max-w-screen-xl mx-auto text-950">
            <h1 class="text-2xl max-sm:text-3xl font-extrabold leading-tight mb-4">Publier une annonce
            </h1>
            <div class="bg-white max-w-screen-xl mx-auto grid md:grid-cols-3  ">

            </div>
            <p class="text-lg mb-8">Experience excellence like never before with our exclusive products and services.</p>


            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto">
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
                                    class=" rounded block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
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
                                <select name="category_id" id="category"
                                    class=" rounded block w-full px-4 py-3 border bg-gray-200 sm:text-sm border-yell focus:outline-none">
                                    <option disabled selected value="">Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-input-error :messages="$errors->get('category_id')" class="my-2" />
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
                                    class="rounded block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
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
                                <select name="location" value="{{ old('location') }}" id="ville"
                                    class="rounded block w-full px-4 py-3 border bg-gray-200 sm:text-sm border-yellow focus:outline-none">
                                    <option disabled selected value="">Select a city</option>
                                    @foreach ($villes as $ville)
                                        <option value="{{ $ville }}">{{ $ville }}</option>
                                    @endforeach
                                </select>
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
                                    class="rounded block w-full px-4 py-3 border  bg-gray-200  sm:text-sm border-yell focus:outline-none">
                            </div>
                            <x-input-error :messages="$errors->get('age')" class="my-2" />
                        </div>


                    </div>

                </div>
                <div class="mb-8 mt-6">
                    <label class="text-xl font-bold mb-4">Description <span class="text-red-500">*</span></label></br>
                    <textarea name="description" class="border-2 border-gray-500">
                      {{ old('description') }}"
                    </textarea>
                   
                </div>
                <x-input-error :messages="$errors->get('description')" class="my-2" />
                <div class="mt-6">
                    <h3 class="text-xl font-bold mb-4">Upload photos (3 photos max.) <span class="text-red-500">*</span>
                    </h3>
                    <div class="col-span-full">
                        <div id="image-container"
                            class="relative mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg id="svg" class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div id="image-upload" class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <div class="mt-6">
                                        <div >
                                            <h3 id="upload-section" class="text-xl font-bold mb-4">Upload photos (3 photos max.)</h3>
                                            <div class="col-span-full flex flex-wrap justify-center gap-4">
                                                <!-- Content here -->
                                            </div>
                                            <label for="file-upload"
                                                class="relative cursor-pointer rounded-md py-2 px-3 bg-white font-semibold text-950 border-yell focus-within:outline-none hover:text-bg-gray-100">
                                                <span>Upload a Images</span>
                                                <input id="file-upload" name="images[]" type="file" multiple
                                                    class="sr-only py-2 ">
                                            </label>
                                        </div>
                                        <div id="image-container" class="hidden mt-6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-input-error :messages="$errors->get('images')" class="my-2" />
        </div>
        <div class="flex items-center justify-end mt-10 mr-20">
            <button type="submit"
                class="flex items-center justify-center gap-2 bg-yellow-500 text-white font-bold py-3 px-4 rounded">
                <span>Publier une annonce</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                    fill="none">
                    <path
                        d="M5.00488 11.525V7.075H0.854883V5.125H5.00488V0.65H7.00488V5.125H11.1549V7.075H7.00488V11.525H5.00488Z"
                        fill="#FDFDFE"></path>
                </svg>
            </button>
        </div>
        </form>
    </div>
    </div>
    </div>
    <script>
      document.getElementById('file-upload').addEventListener('change', function(event) {
    const files = event.target.files;
    const imageContainer = document.getElementById('image-container');
    const uploadSection = document.getElementById('upload-section');
    const svg = document.getElementById('svg');

    if (files.length > 0) {
        // Afficher le conteneur d'images et cacher la section de téléchargement
        imageContainer.classList.remove('hidden');
        uploadSection.classList.add('hidden');
        svg.classList.add('hidden');

        // Vérifier s'il y a déjà trois images téléchargées
        const currentImages = imageContainer.querySelectorAll('img');
        if (currentImages.length >= 3) {
            // Afficher un message indiquant qu'aucune autre image ne peut être ajoutée
            const messageContainer = document.createElement('div');
            messageContainer.textContent = "You can't add more images.";
            imageContainer.appendChild(messageContainer);
            return;
        }

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('mx-auto', 'h-24', 'w-24', 'text-gray-300');

                const removeBtn = document.createElement('button');
                removeBtn.textContent = 'Remove';
                removeBtn.classList.add('text-sm', 'text-red-500', 'ml-2');
                removeBtn.addEventListener('click', function() {
                    // Supprimer le conteneur parent de l'image et du bouton
                    container.remove();
                });

                // Créer un conteneur pour l'image et le bouton "Remove"
                const container = document.createElement('div');
                container.appendChild(img);
                container.appendChild(removeBtn);
                imageContainer.appendChild(container);
            };

            reader.readAsDataURL(file);
        }
    }
});

    </script>
@endsection
