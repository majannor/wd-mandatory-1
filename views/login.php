<?php 
    require_once __DIR__.'/../_.php';
    require_once __DIR__.'/_header.php';
?>

<main>
    <form onsubmit="validate(signup); return false" 
        class="flex flex-col px-4 [&_label]:text-white
        lg:w-1/3 mx-auto gap-4 [&_input]:border [&_input]:border-black
        [&_input]:h-10 [&_input]:rounded-md [&_input]:outline-none
        [&_input]:text-black" >
    
    <div class="grid">
        <label for="">
            email
        </label>

        <input name="user_email" type="email" placeholder="email"
            data-validate="email"
            >
    </div>
    <div class="grid">
        <label for="">
            user_password min <?= USER_PASSWORD_MIN ?> max <?= USER_PASSWORD_MAX ?>
        </label>

        <input name="user_password" type="text" placeholder="password"
            data-validate="str" 
            data-min="<?= USER_PASSWORD_MIN ?>" 
            data-max="<?= USER_PASSWORD_MAX ?>"
            >
    </div>
    <button>Login</button>

</main>

<?php 
    require_once __DIR__.'/_footer.php'
?>