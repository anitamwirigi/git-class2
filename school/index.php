<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION FORM</title>
  </head>
  <body>
    <form action="includes/register.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >First name</label
        >
        <input
          type="text"
          class="form-control"
          id="exampleFormControlInput1"
          name="fname"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Email address</label
        >
        <input
          type="email"
          class="form-control"
          id="exampleFormControlInput1 "
          placeholder="your email"
          name="email"
        />
      </div>
      <br />
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >username</label
        >
        <input
          type="text"
          class="form-control"
          id="exampleFormControlInput1"
          name="username"
        />
      </div>
      <br />
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"
          >password</label
        >
        <textarea
          class="form-control"
          id="exampleFormControlTextarea1"
          name="pass"
        ></textarea>
      </div>
      <br />
      <button type="submit">submit</button>
    </form>
  </body>
</html>
