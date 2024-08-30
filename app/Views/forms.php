<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms</title>

  <?= $this->include('layout/css') ?>


</head>

<body class="w3-light-grey">
  <input id="sidebar-control" type="checkbox" class="w3-hide">
  <div id="app">
    <div class="w3-top w3-card" style="height:54px">

    <?= $this->include('layout/header') ?>


    </div>
    <nav id="sidebar" class="w3-sidebar w3-top w3-bottom w3-collapse w3-white w3-border-right w3-border-top scrollbar" style="z-index:3;width:230px;height:auto;margin-top:54px;border-color:rgba(0, 0, 0, .1)!important" id="mySidebar">
      

    <?= $this->include('layout/sidebar') ?>

    </nav>

    <div class="w3-main" style="margin-top:54px">
      <div style="padding:16px 32px">
        <h3>Form Layouts</h3>
        <div class="w3-row-padding w3-stretch">
          <div class="w3-col l6">
            <div class="w3-white w3-round w3-margin-bottom w3-border" style="">
              <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">VERTICAL FORM</header>
              <div class="w3-padding-large">
                <form>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Name</label>
                    <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Your Name">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Email</label>
                    <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Your Email Address">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Mobile Number</label>
                    <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Your Mobile Number">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Password</label>
                    <input type="password" class="w3-input w3-border w3-round" placeholder="Enter Password">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Confirm Password</label>
                    <input type="password" class="w3-input w3-border w3-round" placeholder="Confirm Password">
                  </div>
                  <div class="w3-margin-bottom">
                    <label>
                      <input type="checkbox" class="w3-check" checked=""> I Agree Terms &amp; Conditions </label>
                  </div>
                  <div class="w3-margin-bottom">
                    <button type="button" class="w3-button w3-primary w3-round"><i class="fa fa-fw fa-lock"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="w3-col l6">
            <div class="w3-white w3-round w3-margin-bottom w3-border" style="">
              <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">ROUND VERTICAL FORM</header>
              <div class="w3-padding-large">
                <form>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Name</label>
                    <input type="text" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Your Name">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Email</label>
                    <input type="text" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Your Email Address">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Mobile Number</label>
                    <input type="text" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Your Mobile Number">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Password</label>
                    <input type="password" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Password">
                  </div>
                  <div class="w3-margin-bottom">
                    <label for="input-1">Confirm Password</label>
                    <input type="password" class="w3-input w3-border w3-round-xxlarge" placeholder="Confirm Password">
                  </div>
                  <div class="w3-margin-bottom">
                    <label>
                      <input type="checkbox" class="w3-check" checked=""> I Agree Terms &amp; Conditions </label>
                  </div>
                  <div class="w3-margin-bottom">
                    <button type="button" class="w3-button w3-primary w3-round-xxlarge"><i class="fa fa-fw fa-lock"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="w3-white w3-round w3-margin-bottom w3-border" style="">
          <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">HORIZONTAL FORM</header>
          <div class="w3-padding-large">
            <form>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Name</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Your Name">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Email</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Your Email Address">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Mobile Number</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round" placeholder="Enter Your Mobile Number">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Password</label>
                <div class="w3-col l10">
                  <input type="password" class="w3-input w3-border w3-round" placeholder="Enter Password">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Confirm Password</label>
                <div class="w3-col l10">
                  <input type="password" class="w3-input w3-border w3-round" placeholder="Confirm Password">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <div class="w3-col l2">&nbsp;</div>
                <div class="w3-col l10">
                  <label>
                    <input type="checkbox" class="w3-check" checked=""> I Agree Terms &amp; Conditions </label>
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <div class="w3-col l2">&nbsp;</div>
                <div class="w3-col l10">
                  <button type="button" class="w3-button w3-primary w3-round"><i class="fa fa-fw fa-lock"></i> Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="w3-white w3-round w3-margin-bottom w3-border" style="">
          <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">ROUND HORIZONTAL FORM</header>
          <div class="w3-padding-large">
            <form>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Name</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Your Name">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Email</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Your Email Address">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Mobile Number</label>
                <div class="w3-col l10">
                  <input type="text" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Your Mobile Number">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Password</label>
                <div class="w3-col l10">
                  <input type="password" class="w3-input w3-border w3-round-xxlarge" placeholder="Enter Password">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <label for="input-1" class="w3-col l2">Confirm Password</label>
                <div class="w3-col l10">
                  <input type="password" class="w3-input w3-border w3-round-xxlarge" placeholder="Confirm Password">
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <div class="w3-col l2">&nbsp;</div>
                <div class="w3-col l10">
                  <label>
                    <input type="checkbox" class="w3-check" checked=""> I Agree Terms &amp; Conditions </label>
                </div>
              </div>
              <div class="w3-row w3-margin-bottom">
                <div class="w3-col l2">&nbsp;</div>
                <div class="w3-col l10">
                  <button type="button" class="w3-button w3-primary w3-round-xxlarge"><i class="fa fa-fw fa-lock"></i> Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?= $this->include('layout/footer') ?>


    </div>
  </div>
</body>

</html>
