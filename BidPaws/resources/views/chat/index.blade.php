@extends('layouts.base')

@section('content')

<div class=" px-5 md:px-12 md:py-4 md:justify-center flex gap-5 max-md:flex-col max-md:gap-0 md:h-[650px]">
    <div class="flex flex-col w-1/4 max-md:ml-0 max-md:w-full">
        <div id="conversations-list" class="flex flex-col mt-2.5 max-md:mt-10">
            <div class="flex flex-col justify-center px-8 py-6 text-xs text-center text-white uppercase bg-white rounded max-md:px-5">
                <div class="justify-center items-center px-16 py-3  bg-sky-800 rounded max-md:px-5">
                    Start new chat
                </div>
            </div>
            <div class=" flex flex-col py-6 mt-6 w-full bg-white rounded">
                <div class="self-start ml-8 text-xs  uppercase text-neutral-900 max-md:ml-2.5">
                    Chats
                </div>
                <div class="shrink-0 mt-5 h-1 border border-solid bg-zinc-100 border-zinc-100"></div>
                @foreach($conversations as $conversation)
                <div id="conversation-{{$conversation->id}}" class="flex justify-between items-center cursor-pointer py-2 mt-1 gap-2 px-6  conversation-item {{ ($conversation->unread_count > 0) ? 'border-l-4 border-sky-800' : '' }}" data-conversation="{{ $conversation->toJson() }}">
                    <div class="flex items-center gap-2">
                        <div class="flex overflow-hidden relative flex-col items-start aspect-square w-[52px] max-md:pl-5">
                            <img src="{{ $conversation->friend_id == auth()->id() ? asset('storage/usersImages/'.$conversation->user->image) : asset('storage/usersImages/'.$conversation->friend->image) }}" class="rounded-full object-cover absolute inset-0 size-full" />

                        </div>
                        <div class="flex flex-col my-auto">
                            <div class="text-sm text-neutral-900">
                                @if($conversation->user_id == auth()->user()->id)
                                {{ $conversation->friend->name }}
                                @else
                                {{ $conversation->user->name }}
                                @endif
                            </div>
                            @if($conversation->messages->last())
                            <div class="flex gap-1 mt-2 justify-center text-xs leading-4 text-neutral-900 text-opacity-50">
                                @if(!$conversation->messages->last()->read_at)
                                <span class="shrink-0 self-start bg-sky-600 rounded-full aspect-square w-[9px]"></span>
                                @endif

                                <div class="flex-auto" id="last-message-{{$conversation->id}}">
                                    {{ $conversation->messages->last()->content }}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div id="unread-count-{{$conversation->id}}" class="flex items-center justify-center w-6 h-6 rounded-full bg-sky-800 text-white text-xs  {{ ($conversation->unread_count > 0) ? '' : 'hidden' }}  ">
                        {{ $conversation->unread_count }}
                    </div>

                </div>
                <div class="shrink-0 mt-1 h-px border border-solid bg-zinc-100 border-zinc-100"></div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="show-conversations" class="hidden flex w-[20%]  mt-5 gap-1 justify-center self-start px-6 py-1 text-xs  rounded bg-zinc-200 max-md:px-5">
        <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="shrink-0 w-6 aspect-square">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                <path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
            </g>
        </svg>
    </div>

    <div class="h-[700px] md:h-[610px] mt-8 md:mt-0 main-container  max-sm:hidden  flex justify-between flex-col ml-5 w-2/3 max-md:ml-0 max-md:w-full bg-white rounded-3xl ">
        <div class=" message-container relative overflow-y-auto">

            <p class="text-gray-400 italic m-auto text-center my-auto">Aucun message</p>
        </div>

        <!-- <div id="sendMessage" class=" hidden flex items-center mt-4">
            <div class="shrink-0 mt-7 h-2px border border-solid bg-zinc-100 border-zinc-100 max-md:max-w-full"></div>

            <input type="text" name="content" id="new-message" class="rounded-full flex-grow border border-gray-300 py-2 px-4 focus:outline-none focus:border-blue-500" placeholder="Saisissez votre message...">
            <button id="send-message" class="px-4 py-2 bg-sky-800 text-white rounded-lg">send</button>
        </div> -->

        <div id="sendMessage" class="mb-3 hidden flex  py-2 px-3  rounded-lg">
            <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <input type="text" name="content" id="new-message" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 " placeholder="Your message...">
            <button id="send-message" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 ">
                <svg class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                </svg>
            </button>
        </div>

    </div>
</div>

<script>
  
    document.addEventListener('DOMContentLoaded', function() {
        const conversationItems = document.querySelectorAll('.conversation-item');
        const sendMessageButton = document.getElementById('send-message');
        const newMessageInput = document.getElementById('new-message');
        const container = document.querySelector('.main-container');
        const showConversationsButton = document.getElementById('show-conversations');
        const conversationsList = document.getElementById('conversations-list');


        if (window.innerWidth <= 768) {
            container.classList.add('max-sm:hidden');
            showConversationsButton.classList.add('hidden');
            conversationsList.classList.remove('hidden');

            showConversationsButton.addEventListener('click', function() {

                if (container && conversationsList) {
                    container.classList.remove('max-sm:hidden');
                    conversationsList.classList.add('hidden');
                    showConversationsButton.classList.remove('hidden');

                } else {
                    console.error('Elements not found.');
                }
            });
        } else {
            container.classList.remove('hidden');
            showConversationsButton.classList.add('hidden');
            conversationsList.classList.remove('hidden');
        }


        conversationItems.forEach(item => {
            item.addEventListener('click', function() {



                if (window.innerWidth <= 768) {
                    container.classList.toggle('max-sm:hidden');
                    showConversationsButton.classList.toggle('hidden');
                    conversationsList.classList.toggle('hidden');

                    showConversationsButton.addEventListener('click', function() {

                        if (container && conversationsList) {
                            container.classList.toggle('max-sm:hidden');
                            conversationsList.classList.toggle('hidden');
                            showConversationsButton.classList.toggle('hidden');

                        } else {
                            console.error('Elements not found.');
                        }
                    });
                }







                const conversationData = JSON.parse(this.getAttribute('data-conversation'));
                conversationId = conversationData.id;


                read_messages(conversationId);

                const unreadCountElement = document.getElementById(`unread-count-${conversationId}`);


                unreadCountElement.classList.add('hidden');
                item.classList.remove('border-l-4', 'border-sky-800');


                const messageContainer = document.querySelector('.message-container');
                messageContainer.id = 'message-container-' + conversationId;
                messageContainer.innerHTML = '';


                const messages = conversationData.messages;


                const otherUser = conversationData.user_id == window.User.id ? conversationData.friend : conversationData.user;
                // const lastOnline =  otherUser.last_online ? otherUser.last_online.diffForHumans() : 'Online';



                const userInfoContainer = document.createElement('div');
                userInfoContainer.classList.add('shadow-md', 'sticky', 'top-0', 'bg-white', 'flex', 'flex-col', 'px-5', 'py-3', 'max-md:px-5', 'max-md:max-w-full');
                userInfoContainer.innerHTML = `
                        <div class="flex gap-3 self-start">
                            <img src="{{ asset('storage/usersImages/unk.svg') }}" class="shrink-0 aspect-square w-[52px] rounded-full" />
                            <div class="flex flex-col my-auto">
                                <div class="text-sm">${otherUser.name}</div>
                                <div class="mt-2 text-xs uppercase">online</div>
                                                            </div>
                        </div>
                    `;


                messageContainer.appendChild(userInfoContainer);


                let userScrolled = false; // Variable pour vérifier si l'utilisateur a fait défiler manuellement

                // Fonction pour vérifier si l'utilisateur a fait défiler manuellement
                messageContainer.addEventListener('scroll', function() {
                    // Si l'utilisateur a fait défiler, nous ne voulons pas régler scrollTop automatiquement
                    userScrolled = true;
                });

                let start = Math.max(messages.length - 5, 0); // Index de départ pour afficher les messages
                let end = messages.length; // Index de fin pour afficher les messages
                displayMessages(messages.slice(start, end), messageContainer);

                // Intervalle pour charger les messages précédents
                setInterval(() => {
                    const nextStart = Math.max(start - 2, 0); // Nouvel index de départ pour afficher les messages
                    const nextEnd = start; // Nouvel index de fin pour afficher les messages
                    const previousMessages = messages.slice(nextStart, nextEnd);
                    displayMessages(previousMessages, messageContainer, true);
                    // Mettre à jour les indices de début et de fin pour la prochaine itération
                    start = nextStart;

                    // Si l'utilisateur n'a pas fait défiler manuellement, faites défiler vers le bas
                    if (!userScrolled) {
                        messageContainer.scrollTop = messageContainer.scrollHeight;
                    }
                }, 1000);




                document.getElementById('sendMessage').classList.remove('hidden');
            });
        });

        function read_messages(conv_id) {
            fetch('/ReadMessages', {
                    method: 'POST',
                    body: JSON.stringify({
                        conversation_id: conv_id
                    }),
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then()

                .catch(error => {
                    console.error('Error:', error);
                });
        }




        //afficher les messages
        function displayMessages(messages, container, prepend = false) {
            messages.forEach(message => {
                const isCurrentUserSender = (message.sender_id == window.User.id);
                const msgSide = isCurrentUserSender ? 'justify-end' : 'justify-start';
                const backgroundColorClass = isCurrentUserSender ? 'bg-blue-100' : 'bg-sky-800';
                const textColorClass = isCurrentUserSender ? '' : 'text-white';
                const messageTime = new Date(message.created_at);
                const formattedTime = messageTime.toLocaleTimeString([], {
                    hour: 'numeric',
                    minute: 'numeric',
                    hour12: true
                });

                const messageElement = document.createElement('div');
                messageElement.classList.add('flex', 'px-12', 'gap-4', 'block', 'mt-1', msgSide);

                messageElement.innerHTML = `
            <div class="flex flex-col grow shrink-0 basis-0 w-[80%] md:w-[60%]">
                <div class="justify-center px-5 py-4 text-sm ${backgroundColorClass} ${textColorClass} rounded-3xl">
                    ${message.content}
                </div>
                <div class="${isCurrentUserSender ?'justify-end' : 'justify-start'} mt-2.5 text-xs text-right">${formattedTime}</div>
            </div>
        `;


                prepend ? insertAfter(messageElement, container.firstChild) : container.appendChild(messageElement);

            });


            function insertAfter(newNode, referenceNode) {
                referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
            }
        }

        sendMessageButton.addEventListener('click', function() {
        
            const messageContent = newMessageInput.value.trim();
          
            if (messageContent !== '') {
                const activeConversation = document.querySelector('.conversation-item.active');


                const formData = new FormData();
                formData.append('conversation_id', conversationId);
                formData.append('content', messageContent);


                fetch("/messages/send", {
                    
                        method: 'POST',
                        body: formData,
                        headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                    })
                    .then(response => response.json())
                    .then(data => {
                      
                        if (data.success) {
                            console.log("message envoyée");m
                        } else {
                            
                            console.error('Échec de l\'envoi du message');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur lors de l\'envoi du message :', error);
                    });
            }
        });


    });
</script>

@endsection