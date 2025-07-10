<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Converted Amount</title>
</head>
<body>
    <div class="container">
        <div class="section">
            <h1 class="title has-text-centered has-text-primary">Conversion Result</h1>
            
            <div class="box">
                <div class="content">
                    <p class="has-text-info"><strong>Amount:</strong> {{ $amount }}</p>
                    <p class="has-text-info"><strong>From:</strong> {{ $from }}</p>
                    <p class="has-text-info"><strong>To:</strong> {{ $to }}</p>
                    <p class="has-text-success"><strong>Converted Amount:</strong> {{ $converted }}</p>
                </div>
            </div>
            
            <div class="has-text-centered">
                <a href="{{ url('/') }}" class="button is-primary">Try Again</a>
            </div>
        </div>
    </div>
</body>
</html>