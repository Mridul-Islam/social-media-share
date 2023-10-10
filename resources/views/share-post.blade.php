<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 10 Add Social Media Share Buttons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        #social-links li {
            display: inline-block;
            padding: 4px;
            text-align: center;
            list-style: none;
        }

    </style>
</head>

<body>

    <div class="container">
        <h3>Laravel 10 Add Social Media Share Buttons</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">Laravel 10 Add Social Media Share Buttons</div>
            <div class="panel-body">
                
                {!! $shareButtons !!}

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Post</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    {{ $post->id }}
                                </td>
                                <td>
                                    {{ $post->title }}
                                </td>
                                <td>
                                    {!! Share::page($post->url, $post->title)->facebook()->twitter()->whatsapp()->linkedin() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
