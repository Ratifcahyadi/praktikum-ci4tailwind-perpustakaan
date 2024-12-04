<!-- Bagian Views/dashboard/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">

    <title>Perpustakaan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .container {
            display: flex;
        }

        /* .sidebar { */
            /* width: 20%; */
            /* background-color: #f1f1f1; */
        /* } */

        .content {
            flex-grow: 1;
            padding: 2%;
        }

        header {
            /* background-color: violet; */
            color: #fff;
            padding: 1%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header h1 {
            margin: 0;
            padding: 0;
            text-align: center;
            flex-grow: 1;
            font-size: 2vw;
        }

        header .material-icons {
            font-size: 3vw;
            margin-right: 2%;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .content {
                margin-top: 2%;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
            }

            header .material-icons {
                margin-right: 0;
                margin-bottom: 2%;
            }
        }
    </style>
</head>
<body>
    <header class="bg-primary top-0 sticky">
        <i class="material-icons">dashboard</i>
        <h1>Header</h1>
    </header>

    <script>
        // Ambil elemen sidebar dan content menggunakan ID
        var sidebar = document.getElementById('sidebar');
        var content = document.getElementById('content');

        // Tambahkan gaya CSS untuk mengatur tata letak 
        sidebar.style.float = 'left';
        content.style.marginLeft = '20%';
    </script>