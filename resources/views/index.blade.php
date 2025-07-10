<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Currency Converter</title>
</head>
<body>
    <div class="container">
        <div class="section">
            <h1 class="title has-text-centered has-text-primary">Currency Converter</h1>
            
            @if(session('error'))
                <div class="notification is-danger">
                    {{ session('error') }}
                </div>
            @endif
            
            <div class="box">
                <form method="POST" action="{{ route('convert') }}" class="form">
                    @csrf
                    <div class="field">
                        <label class="label has-text-info">Amount:</label>
                        <div class="control">
                            <input type="number" name="amount" step="0.01" class="input" required placeholder="Enter amount">
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label has-text-info">From:</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="from" required>
                                    <option value="">Select currency</option>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency }}">{{ $currency }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label has-text-info">To:</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="to" required>
                                    <option value="">Select currency</option>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency }}">{{ $currency }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary is-fullwidth">Convert</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</body>
</html>

