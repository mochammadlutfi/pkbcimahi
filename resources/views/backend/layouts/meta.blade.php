<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<title>Admin | {{ settings()->get('app_name') }}</title>

<meta name="description" content="Admin | {{ settings()->get('app_name') }}">
<meta name="author" content="{{ settings()->get('app_name') }}">
<meta name="robots" content="noindex, nofollow">

<!-- Open Graph Meta -->
<meta property="og:title" content="Admin | {{ settings()->get('app_name') }}">
<meta property="og:site_name" content="Admin | {{ settings()->get('app_name') }}">
<meta property="og:description" content="Admin | {{ settings()->get('app_description') }}">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="{{ settings()->get('app_logo') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
