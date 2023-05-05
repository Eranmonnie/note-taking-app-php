<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $heading ?></title>
</head>
<style>
        body{  
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .navstyle{
            padding-inline-start: 0px;
            display:flex;
            justify-content: center;
            gap: 5em;
            list-style: none;
        }
        a{
            text-decoration : none;
        }

        </style>
<body>
    <nav>
        <ul class="navstyle">

            <li><a href="/">Home</a></li>

            <?php if (isset($_SESSION['user'])) : ?>

            <li><a href="/notes">Notes</a></li>
            
            <?php endif; ?>

            <?php if (! isset($_SESSION['user'])) : ?>

            <li> <a href="/signup">Signup</a></li>

            <li><a href="/login">Login</a></li>
            
            <?php else :?>

                <li> <a href="/notes/note-create">Create</a></li>
                <form action="/login" method="POST"> <input type="hidden" name="__method" value="DELETE"> <button> Logout</button></form>
                <!-- make form later  -->

            <?php endif; ?>
        

            
        </ul>
    </nav>
