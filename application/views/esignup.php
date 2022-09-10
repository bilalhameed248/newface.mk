<?php include('include/signin_header.php'); ?>
<div id="root">
    <form class="site" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>home/esignup">
      <div class="site__content" style="padding-bottom: 8rem;"><a type="link" href="<?php echo base_url();?>" title="" class="btn btn--back d-flex d-md-flex"><span class="btn__sign"></span><span class="btn__text">Back</span></a>
        <div class="container--full-width-column container--full-width-padded container">
          <div class="justify-content-center row">
            <div class="col-12 col-lg-6">
              <div class="text-center mg-b-lg-8 mg-b-xs-4 row">
                <div class="col-12">
                  <h2 class="mg-b-xs-2" style="margin-top: 10rem;">Employer Sign Up</h2>
                  <p>Already have an Account <a href="<?php echo base_url();?>home/esignin" style="color: #004ab2;">Sign in as a Employee.</a>
                  <p>Not an employer? <a href="<?php echo base_url();?>home/signup" style="color: #004ab2;">Sign up as a candidate.</a>
                  </p>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12 col-md-6">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Owner Name</label>
                    <div class="field-container">
                      <input placeholder="First Name" title="" required="" type="" class="form-control" value="" placeholder="Owner name" name="owner_name"><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Owner Email</label>
                    <div class="field-container">
                      <input id="email" name="owner_email" placeholder="Email" title="" required type="email" class="form-control" value=""><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Re-Type E-mail</label>
                    <div class="field-container">
                      <input id="again_email" placeholder="Work Email" title="" required="" type="email" class="form-control" value=""><span class="validation-text">Please enter a valid email.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Phone Number</label>
                    <div class="field-container">
                      <input placeholder="Phone Number" title="" required="" name="phone_number" type="tel" class="form-control" value=""><span class="validation-text">Please enter a valid phone number.</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12 col-md-6">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Company Name</label>
                    <div class="field-container">
                      <input name="company_name" placeholder="Company Name" title="" required="" type="" class="form-control" value=""><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Company Phone Number</label>
                    <div class="field-container">
                      <input placeholder="Company Phone Number" title="" required="" name="company_phone_no" type="tel" class="form-control" value=""><span class="validation-text"><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Company Phone Number</label>
                    <div class="field-container">
                      <input placeholder="Company Phone Number" title="" required="" name="company_phone_no" type="tel" class="form-control" value=""><span class="validation-text"><span class="validation-text"></span>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="field-wrapper field-wrapper--small">
                    <label class="">Company Address</label>
                    <div class="field-container">
                      <input type="text" id="company_address" class="form-control" placeholder="company address" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="company_address" required>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12">
                  <div class="checkbox">
                    <label class="checkbox__label">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__check checkbox--squared"></span><span class="checkbox__text">Check here if hiring only outside of the U.S.</span>
                    </label>
                  </div>
                </div>
              </div> -->
              <!-- <div class="row">
                <div class="Select-wrapper--small col-12">
                  <div class="Select-wrapper">
                    <label class="">How did you hear about Scouted?</label>
                    <div class="selector__StyledSelect-sc-1az9a9q-1 kkOmxS css-2b097c-container">
                      <div class="react-select__control css-yk16xz-control">
                        <div class="react-select__value-container css-1hwfws3">
                          <div class="react-select__placeholder css-1wa3eu0-placeholder">Select...</div>
                          <div class="css-1g6gooi">
                            <div class="react-select__input" style="display: inline-block;">
                              <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-2-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                              <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 16px; font-family: Karla, Helvetica, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                            </div>
                          </div>
                        </div>
                        <div class="react-select__indicators css-1wy0on6"><span class="react-select__indicator-separator css-1okebmr-indicatorSeparator"></span>
                          <div aria-hidden="true" class="react-select__indicator react-select__dropdown-indicator css-tlfecz-indicatorContainer"><span class="selector__ChevronDown-sc-1az9a9q-2 exlTqX"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input tabindex="-1" autocomplete="off" required="" class="selector__StyledHiddenInput-sc-1az9a9q-0 gYCUnF" value="">
                  </div>
                </div>
              </div> -->
              <div class="mg-b-lg-5 mg-b-xs-4 row">
                <div class="col-12"></div>
              </div>
              <div class="justify-content-center row">
                <div class="col-12">
                  <div class="d-flex align-items-center justify-content-center flex-column flex-lg-row">
                    <div class="order-1 order-lg-2 mg-b-xs-5 mg-b-lg-1 position-relative">
                      <button type="submit" id="submit" name="submit" title="" class="btn btn--primary" style="background: #004ab2;"><span class="btn__sign"></span><span class="btn__text">Submit</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
<script type="text/javascript">
    $(document).ready(function()
    {
      $("#again_email").keyup(function()
      {
        var email=$("#email").val();
        
        var agn=$("#again_email").val();
        if(email != agn)
        {
          $("#again_email").css('background-color','pink');
          $("#submit").attr('disabled');
        }
        else
        {
          //alert('match');
          $("#again_email").css('background-color','white');
          $("#submit").removeAttr('disabled');
        }
      });
  });
</script>
<?php include('include/signin_footer.php'); ?>