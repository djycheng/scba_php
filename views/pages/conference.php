<h2>
  SCBA Annual Scientific Symposium 2017
</h2>

<div class="row">
  <div class="col-md-6">
    <h3>
      About the Symposium
    </h3>

    <p>
      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui
    </p>
  </div>

  <div class="col-md-6">
    <h3>
      Registration Form
    </h3>

    <form>
      <label for="name">
        Full Name:
      </label>
      <input type="text" name="name" id="name" class="form-control">
      <div class="filler"></div>
      <div class="filler"></div>

      <label for="email">
        Email:
      </label>
      <input type="text" name="email" id="email" class="form-control">
      <div class="filler"></div>
      <div class="filler"></div>

      <label for="affiliation">
        Affiliation
      </label>
      <input type="text" name="affiliation" id="affiliation" class="form-control">
      <div class="filler"></div>
      <div class="filler"></div>

      <label for="abstract">
        Submit Abstract:
      </label>
      <br/>
      <div class="row" name="abstract" id="abstract">
        <div class="col-md-2">
          Yes <input type="radio" name="abstract" value="yes">
        </div>
        <div class="col-md-2">
          No <input type="radio" name="abstract" value="no">
        </div>
      </div>
      <div class="filler"></div>
      <div class="filler"></div>

      <label for="notes" id="messageLabel">
        Notes (2000 characters remaining):
      </label>
      <textarea name="notes" id="notes" class="form-control" rows="5" onkeyup="allowKeyPress(this)"></textarea>
      <div class="filler"></div>
      <div class="filler"></div>

      <label for="feeType">
        Fee:
      </label>
      <select class="form-control" name="feeType" id="feeType">
        <option value="" disabled selected>Select your option</option>
        <option value="200">Registration Fee for PI/Staff: $200</option>
        <option value="100">Registration Fee for Postdoc: $100</option>
        <option value="50">Registration Fee for Student: $50</option>
      </select>
      <div class="filler"></div>
      <div class="filler"></div>

      <button type="button" class="btn btn-default" id="submit">
        Submit
      </button>
      <div class="filler"></div>
      <div class="filler"></div>
  </div>
</div>
