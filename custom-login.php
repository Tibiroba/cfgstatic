<?php 
/*Template Name: Custom Login Page*/ 

get_header();
 
global $user_ID;

if(!$user_ID){
    ?>
    <form action="">
        <p>
            <label for=""></label>
            <input type="text" id="username" name="username" placeholder="Entre com o Usuário/Email">

        </p>

        <p>
            <label for=""></label>
            <input type="text" id="password" name="password" placeholder="Entre com a senha">
            
        </p>
        <button type="submit" name="btn_submit">Entrar</button>

    </form>
    <?php 

    get_footer();

    else{
        
    }
}

