<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Ghost Drive</title>
    <link rel='stylesheet' type='text/css' href='css/styles.css' />
	<link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_faq.css') }}">
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var accordions = document.getElementsByClassName('accordion');
        Array.prototype.forEach.call(accordions, function(acc) {
            acc.addEventListener('click', function() {
                this.classList.toggle('active');
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        });
    });
    </script>
</head>
<body>
    <div class="topnav">
		<a href="index.php">
			<img src="images/GhostDriveTextOnly.png" width="397" height="227" alt=""/>
		</a>
		<form>
			<button type="submit" formaction="login">Login</button>
		</form>
		<a href="devices">Devices</a>
 		<a href="FAQ">FAQ</a>
		<a href="about">About</a>
    </div>

    <main style="padding: 80px 20px 200px;">
        <h1>Frequently Asked Questions</h1>

        <button class="accordion">General Questions</button>
        <div class="panel">
            <p><strong>What is Ghost Drive?</strong><br>
            Ghost Drive is a smart driving assistant that alerts you to speed cameras, hazards, and and provides convoy communication features.</p>

            <p><strong>Does Ghost Drive work offline?</strong><br>
            Yes. Speed camera data is stored locally so the system remains functional without an internet connection.</p>

            <p><strong>What hardware do I need?</strong><br>
            A Raspberry Pi, PA1010D GPS module, LoRa hat, and optional touchscreen for local interface.</p>
        </div>

        <button class="accordion">Testing & Troubleshooting</button>
        <div class="panel">
            <p><strong>Where can I find test logs?</strong><br>
            All automated test logs are saved in the <code>logs/</code> folder as <code>test_results.log</code> and <code>app.log</code>.</p>

            <p><strong>I see a "No module named smbus" error.</strong><br>
            Install the I2C library: <code>sudo apt install python3-smbus i2c-tools</code> and enable I²C in raspi-config.</p>

            <p><strong>I see a "No module named RPi" error.</strong><br>
            Install the GPIO library: <code>sudo apt install python3-rpi.gpio</code> or <code>pip install RPi.GPIO</code> inside your virtual environment.</p>
        </div>

        <button class="accordion">Website & Account</button>
        <div class="panel">
            <p><strong>How do I reset my password?</strong><br>
            Use the "Forgot Password" link on the login page to request a reset code via email or SMS.</p>

            <p><strong>How do I link a new device?</strong><br>
            After signup, add your Raspberry Pi by entering the one-time code shown on the device setup screen.</p>
        </div>

        <button class="accordion">Installation & Setup</button>
        <div class="panel">
            <p><strong>Can I run Ghost Drive on other platforms?</strong><br>
            The software is optimized for Raspberry Pi OS. Other Linux boards may work but require manual GPIO and serial setup.</p>

            <p><strong>How do I auto-start the app at boot?</strong><br>
            Create a systemd service or add the startup command to <code>~/.bashrc</code> to run <code>python3 app.py</code> on login.</p>
        </div>
    </main>

	<div class="bottomNav">
    	<img src="images/GhostDrive-rev1.png" width="200" height="200" alt=""/> 
		<hr></hr>
		<div class="copyright">
			<p>© GhostDrive LTD, 2024</p>
		</div>
		<a class="aboutLink" href="about.php">About</a>
		<a class="contactLink" href="contact.php">Contact</a>
		<form>
			<button type="submit" formaction="login.php">Login</button>
		</form>
		<div class="social">
			<p>Follow Us:</p>
			<div class="facebook">
				<a href="https://www.facebook.com/" target="_blank">
					<i class='bx bxl-facebook  bx-sm'></i>
				</a>
			</div>
			<div class="twitter">
				<a href="https://www.twitter.com/" target="_blank">
					<i class='bx bxl-twitter bx-sm'></i>
				</a>
			</div>
			<div class="tiktok">
				<a href="https://www.tiktok.com/" target="_blank">
					<i class='bx bxl-tiktok bx-sm'></i>
				</a>
			</div>
			<div class="instagram">
				<a href="https://www.instagram.com/" target="_blank">
					<i class='bx bxl-instagram bx-sm'></i>
				</a>
			</div>
		</div>
	</div>
</body>
</html>
