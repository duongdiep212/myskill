 //<![CDATA[
        var dataForm = new VarienForm('form-validate', true);

        /*function openTerms() {
            window.open("<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB) ?>terms-of-use/", "terms", "status=no, menubar=no, location=no");
        }
        function openAffiliateTerms() {
            window.open("<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB) ?>affiliate-terms-of-use/", "terms", "status=no, menubar=no, location=no");
        }
        function openAboutMembership() {
            window.open("<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB) ?>customer-loyalty-discount-program/", "terms", "status=no, menubar=no, location=no");
        }*/
        /**
         * Check  checkbox is cheked or no,if yes then display seller form
         * else hide form and remove validations
         **/
        function checkSellerFormRequired(arg) {
            if (arg) {
                $('seller_form').show();
                $('company_name').addClassName('required-entry');
                $('company_locality').addClassName('required-entry');
                $('is_affiliate_terms_accepted').addClassName('required-entry');
            } else {
                $('seller_form').hide();
                $('current_password').removeClassName('required-entry');
                $('company_name').removeClassName('required-entry');
                $('company_locality').removeClassName('required-entry');
                $('is_affiliate_terms_accepted').removeClassName('required-entry');
            }
        }
		<?php if ($this->getShowAddressFields()): ?>
			$j(document).ready(function(){
				$j('#country').addClass('form-control');
			});
			new RegionUpdater('country', 'region', 'region_id', <?php echo $this->helper('directory')->getRegionJson() ?>, undefined, 'zip');
		<?php endif; ?>
		
		
		$j(document).ready(function(){
			$j('#form-validate #submit-btn').click(function(e){
				e.preventDefault();
			
				var randomNr1 = 0; 
				var randomNr2 = 0;
				var totalNr = 0;

				randomNr1 = Math.floor(Math.random()*10);
				randomNr2 = Math.floor(Math.random()*10);
				totalNr = randomNr1 + randomNr2;
				var texti = "What is "+randomNr1+" + "+randomNr2 + " = ? ";
				
                if(dataForm.validator.validate()){
                   swal({
						title: "To continue, please solve the equation below:",
						text: texti,
						type: "input",
						confirmButtonClass : "blue-btn btn ",
						showCancelButton: true,
						cancelButtonClass: "pink-btn btn",
						closeOnConfirm: false,
						inputPlaceholder: ""
					}, function (inputValue) {
						if (inputValue === false) return false;
						if (inputValue === "") {
							swal.showInputError("You need to write something!");
							return false;
						}
						if (inputValue == totalNr) {
							swal({
								title: "Good job!",
								text: "You proved that you are human!",
								type: "success",
								timer: 2000,
								showConfirmButton: false,
							});
							$j('#form-validate').submit();
						}else{
							swal.showInputError("Your answer is wrong. Please enter correct answer.");
							return false;
						}
					});
                }
            })
		});