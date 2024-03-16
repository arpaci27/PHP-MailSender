<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailSend</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div class="text-bg-secondary p-3">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <form action="POST">
                <div class="card border-light mb-3 shadow" style="max-width: 18rem;"> <!-- Added shadow class here -->
                    <div class="card-header">Leave a message</div>
                    <div class="card-body">
                        
                        <!-- Email input -->
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
                        </div>

                        <!-- Subject input -->
                        <div class="mb-3">
                            <label for="subjectInput" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subjectInput">
                        </div>

                        <!-- Message textarea -->
                        <div class="mb-3">
                            <label for="messageTextarea" class="form-label">Message</label>
                            <textarea class="form-control" id="messageTextarea" rows="3"></textarea>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>


</html>