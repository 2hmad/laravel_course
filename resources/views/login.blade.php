<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Simple Login form - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
        id="bootstrap-css">
    <style type="text/css">
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function() {};
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css +
                '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>

<body data-new-gr-c-s-check-loaded="14.1058.0" data-gr-ext-installed="">
    <ul>
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>
    {{-- <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
    <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a> --}}
    {{ LaravelLocalization::getCurrentLocale() }}
    {{ LaravelLocalization::getCurrentLocaleName() }}
    {{ LaravelLocalization::getCurrentLocaleNative() }}
    {{ LaravelLocalization::getCurrentLocaleDirection() }}
    {{ __('main.welcome') }}
    <form class="form-horizontal" action="{{ route('loginUser') }}" method="POST">
        @csrf
        <fieldset>
            <div id="legend">
                <legend class="">Login</legend>
            </div>

            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                </div>
            </div>

            <div class="control-group">
                <!-- Button -->
                <div class="controls">
                    <button class="btn btn-success">Login</button>
                </div>
            </div>
        </fieldset>
    </form>
</body>

</html>
