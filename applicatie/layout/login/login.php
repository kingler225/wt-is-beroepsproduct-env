<?php

function generateLoginPanel(){
    return <<<LOGIN
        <form method="POST">
            <dl>
                <dt>username:</dt>
                <dd><input type="text" name="username"/>
                <dt>password:</dt>
                <dd><input type="password" name="password"/>
            </dl>
            <input type="submit" value="Login" />
        </form>
    LOGIN;
}
?>