<main class='mx-auto mt-2 w-5/6'>
    <div class='text-yellow-400 rounded p-2'>
        <h2 class='mt-1 text-center text-2xl font-bold leading-9 tracking-tight'>Inicio de Sesión</h2>
        <p>Ingrese su usuario y contraseña para iniciar sesión</p>
        <div class='mt-1 sm:mx-auto sm:w-full sm:max-w-sm'>
            <form class='w-full' action='#' method='POST'>
                <div>
                    <label htmlFor='user' class='block text-sm font-medium leading-6 text-white mt-1'>
                        Usuario
                    </label>
                    <div class='mt-1'>
                        <input id='user' name='user' type='text' autoComplete='user' required class='ps-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' />
                    </div>
                </div>
                <div>
                    <label htmlFor='pass' class='block text-sm font-medium leading-6 text-white mt-1'>
                        Contraseña
                    </label>
                    <div class='mt-1'>
                        <input id='pass' name='pass' type='password' autoComplete='' required class='ps-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' />
                    </div>
                </div>
                <div class="text-right mt-2">
                    <button class="bg-yellow-400 text-white p-2 rounded">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</main>