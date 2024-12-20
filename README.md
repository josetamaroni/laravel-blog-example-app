<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## My primer proyecto de Laravel

Proyecto de un Blog de ejemplo, realizado con Laravel, Breeze.

### Comandos más usados
- La i es de invoke, invocable de una sola dirección
    > php artisan make:controller PostController -i
- Contiene los 7 metodos rest  
    > php artisan make:controller PostController -r     
- Contiene los 5 metodos rest -> Create y edit no se crean   
    > php artisan make:controller PostController --api     
- Solo contiene controlador vacio
    > php artisan make:controller PostController           
- Corre todas las migraciones con el metodo UP
    > php artisan migrate      
- Corre todas las migraciones con el metodo DOWN lo que hace que revierta los cambios                
    > php artisan migrate:rollback             
- Corre todas las migraciones con el metodo DOWN de la ultima migracion
    > php artisan migrate:rollback --step=1    
- Elimina todo y vuelve a cargar correr las migraciones desde cero
    > php artisan migrate:fresh                
- Para saber las Rutas existentes
    > php artisan route:list
    
    > php artisan route:list --path=blog
- Metodos de Eloquent
    > php artisan make:model Post

    > php artisan make:model Post -m

    > php artisan make:model -mrc Post

    > php artisan make:model --help

- Php Artisan Tinker
    > App\Models\Post::get();

    > App\Models\Post::find(1);

### Formularios
- Se debe colocar dentro de los formularios la directiva @csrf [CSRF](https://laravel.com/docs/11.x/blade#csrf-field), el token dura 120 min por defecto SESSION_LIFETIME=120

- Los campos del formulario se obtienen del metodo request(), también se puede usar la clase Request en el controlador
    ``` 
        use Illuminate\Http\Request;
        public function store(Request $request)
        {
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->save();
            return to_route('posts.index');
        }
    ```
- Validaciones de formularios 
    * [Validation](https://laravel.com/docs/11.x/validation#main-content) 
    * [Available Validation Rules](https://laravel.com/docs/11.x/validation#available-validation-rules)
    ``` 
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post created!');

        return to_route('posts.index');
    }

    ``` 

### Soporte multi lenguaje
- Paquete utilizado [Laravel Lang](https://laravel-lang.com/introduction.html)
    > php artisan lang:publish -> Se crea el directorio **/lang** para configurar distintos lenguajes **/en /es**

    > composer require --dev laravel-lang/lang

    > php artisan lang:update

    > En .env se cambia el lenguaje APP_LOCALE=en

    > Si dese agregar otro lenguaje **php artisan lang:add pt** Portugués
    ``` 
        Se puede agregar la traducción del lenguaje en la validación:
        public function store(Request $request)
        {
            $request->validate([
                'title' => ['required'],
                'body' => ['required']
            ],[
                'title' => 'El Título es requerido',
                'body' => 'El contenido es requerido'
            ]);

            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->save();

            session()->flash('status', 'Post created!');

            return to_route('posts.index');
        }
    ``` 
    > Para hacer traducciones de titulos o contenido se puede usar **{{ __('Title') }}** **{{ __('Body') }}**
    ```
        En el archivo es.json
        {
            "Title": "Título",
            "Body": "Contenido"
        }
    ```

### Factorizando el código
- Se puede hacer un Form Request
    > php artisan make:request < Nombre >





## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
