$(document).ready(function() {

				$("#next-1").click(function() {
					$("#second").show();
					$("#first").hide();
					$("#progressBar").css("width", "60%");
					$("#progressText").text("Step - 2");

				});

				$("#next-2").click(function() {
					$("#third").show();
					$("#second").hide();
					$("#progressBar").css("width", "100%");
					$("#progressText").text("Step - 3");

				});

				$("#prev-2").click(function() {
					$("#second").hide();
					$("#first").show();
					$("#progressBar").css("width", "20%");
					$("#progressText").text("Step - 1");

				});

				$("#prev-3").click(function() {
					$("#third").hide();
					$("#second").show();
					$("#progressBar").css("width", "60%");
					$("#progressText").text("Step - 2");
				});

				$("#submit").click(function() {
					$("#formBox").hide();
					$("#formBox").hide();
					$("#loadingBar").show();

					setTimeout(function(){

						//changes text
						document.getElementById("findingOfferText").innerHTML="View Your Offer!";
						//gets background of view your offer text
						var x = document.getElementById("newBox");
						x.className = "progress-bar bg-success";

						//changes text background to match 
						var y = document.getElementById("findingOfferText");
						y.className = "lead bg-success";
						
						},3000);

				});


				$("#closePopup").click(function() {
					$("#formBox").show();
					$("#popup").hide();
				});

				$("#findingOfferText").click(function() {
					window.location.replace("http://stackoverflow.com");
				});


			});


			