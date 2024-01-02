    <div class='w-5/6 md:max-w-3xl mx-auto text-yellow-400 p-2 rounded mt-3'>
        <h1 class='mt-1 text-center text-2xl font-bold leading-9 tracking-tight'>Contáctanos</h1>
        <p class="text-center">Envíanos un mensaje con tus comentarios o consultas y muy pronto te contactaremos</p>
        <form action='#' method='POST' class='w-full mx-auto mt-2'>
            <div>
                <label htmlFor='name' class='block text-start text-sm font-medium leading-6 text-white mt-1'>
                    Nombre
                </label>
                <div class='mt-1'>
                    <input id='name' name='name' type='text' autoComplete='name' required class='block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' />
                </div>
            </div>
            <div>
                <label htmlFor='phone' class='block text-start text-sm font-medium leading-6 text-white mt-1'>
                    Teléfono
                </label>
                <div class='mt-1'>
                    <input id='phone' name='phone' type='tel' autoComplete='phone' required class='block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' />
                </div>
            </div>
            <div>
                <label htmlFor='email' class='block text-start text-sm font-medium leading-6 text-white mt-1'>
                    Correo
                </label>
                <div class='mt-1'>
                    <input id='email' name='email' type='email' autoComplete='email' required class='block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' />
                </div>
            </div>
            <div>
                <label htmlFor='message' class='block text-start text-sm font-medium leading-6 text-white mt-1'>
                    Mensaje
                </label>
                <div class='mt-1'>
                    <textarea class='block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' id='message' name='message' autoComplete='user' required rows={4} placeholder=' Escribe tu mensaje'></textarea>
                </div>
            </div>
            <div class="text-right mt-2">
                <button class='bg-yellow-400 rounded text-white p-2'>Enviar</button>
            </div>
        </form>
    </div>