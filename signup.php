<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />

    <title>Signup</title>
</head>

<body>
    <main>
        <section class="section-calendar">
            <div class="row">
                <div class="book">
                    <div class="col-1-of-2">
                        <div class="book__form">
                            <form action="calendar.php" class="form" method="post">

                                <div class="u-margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                        Pick a day
                                    </h2>
                                </div>

                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Full Name" name = "name" id="name" required />
                                    <label for="name" class="form__label">Full Name</label>
                                </div>

                                <div class="form__group">
                                    <input type="text" class="form__input" placeholder="Email address" name = "email" id="email" required />
                                    <label for="email" class="form__label">Email</label>
                                </div>

                                <button type="submit" value="submit" class="btn btn--white btn--animated">Submit</button>
                                <!-- <a role="button" type="submit" value="submit" class="btn btn--white btn--animated">Submit</a> -->
                            </form>
                            
                        </div>
                    </div>
                    <div class="col-1-of-2">
                
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>