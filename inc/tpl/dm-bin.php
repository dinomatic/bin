<?php
use PrivateBin\I18n;
?>

<!DOCTYPE html>
<html lang="<?php echo I18n::getLanguage(); ?>"<?php echo I18n::isRtl() ? ' dir="rtl"' : ''; ?>>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Security-Policy" content="<?php echo I18n::encode($CSPHEADER); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noindex" />
		<meta name="google" content="notranslate">
		<title><?php echo I18n::_($NAME); ?></title>
		<?php // This is a modified version of bootstrap including only modal and dropdown components. ?>
		<link type="text/css" rel="stylesheet" href="css/dm-bin/bootstrap.css?<?php echo rawurlencode($VERSION); ?>" />
		<link type="text/css" rel="stylesheet" href="css/dm-bin/water.css?<?php echo rawurlencode($VERSION); ?>" />
		<link type="text/css" rel="stylesheet" href="css/dm-bin/fix.css?<?php echo rawurlencode($VERSION); ?>" />
	<?php if ($SYNTAXHIGHLIGHTING) : ?>
		<link type="text/css" rel="stylesheet" href="css/prettify/prettify.css?<?php echo rawurlencode($VERSION); ?>" />
	<?php if (strlen($SYNTAXHIGHLIGHTINGTHEME)) : ?>
		<link type="text/css" rel="stylesheet" href="css/prettify/<?php echo rawurlencode($SYNTAXHIGHLIGHTINGTHEME); ?>.css?<?php echo rawurlencode($VERSION); ?>" />
	<?php endif; endif; ?>
		<noscript><link type="text/css" rel="stylesheet" href="css/noscript.css" /></noscript>
		<script type="text/javascript" data-cfasync="false" src="js/jquery-3.7.0.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/zlib-1.2.13-1.js" integrity="sha512-Ltu/5qZMapdRIy4B3/iuLessSK6CvAui1C8txOX0z/uAFDJXXSwjvHsiFg9peQ2Gg/ga2tneKBfS0+00ndFsjQ==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/base-x-4.0.0.js" integrity="sha512-nNPg5IGCwwrveZ8cA/yMGr5HiRS5Ps2H+s0J/mKTPjCPWUgFGGw7M5nqdnPD3VsRwCVysUh3Y8OWjeSKGkEQJQ==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/rawinflate-0.3.js" integrity="sha512-g8uelGgJW9A/Z1tB6Izxab++oj5kdD7B4qC7DHwZkB6DGMXKyzx7v5mvap2HXueI2IIn08YlRYM56jwWdm2ucQ==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/bootstrap-3.4.1.js" integrity="sha512-oBTprMeNEKCnqfuqKd6sbvFzmFQtlXS3e0C/RGFV0hD6QzhHV+ODfaQbAlmY6/q0ubbwlAM/nCJjkrgA3waLzg==" crossorigin="anonymous"></script>
	<?php if ($FILEUPLOAD) : ?>
			<script type="text/javascript" data-cfasync="false" src="js/dm-bin.js" integrity="sha512-5vDWYOAnFV1g46KI4xDOAsAiR3xJ+/5TeZgUViExmaaPJ0+njizx8RxvgiHMFfxG1IuQHBIqN3/8qXmU9v3kjw==" crossorigin="anonymous"></script>
	<?php endif; ?>
	<?php if ($SYNTAXHIGHLIGHTING) : ?>
		<script type="text/javascript" data-cfasync="false" src="js/prettify.js?<?php echo rawurlencode($VERSION); ?>" integrity="sha512-puO0Ogy++IoA2Pb9IjSxV1n4+kQkKXYAEUtVzfZpQepyDPyXk8hokiYDS7ybMogYlyyEIwMLpZqVhCkARQWLMg==" crossorigin="anonymous"></script>
	<?php endif; ?>
	<?php if ($MARKDOWN) : ?>
		<script type="text/javascript" data-cfasync="false" src="js/showdown-2.1.0.js" integrity="sha512-WYXZgkTR0u/Y9SVIA4nTTOih0kXMEd8RRV6MLFdL6YU8ymhR528NLlYQt1nlJQbYz4EW+ZsS0fx1awhiQJme1Q==" crossorigin="anonymous"></script>
	<?php endif; ?>
		<script type="text/javascript" data-cfasync="false" src="js/purify-3.0.6.js" integrity="sha512-N3y6/HOk3pbsw3lFh4O8CKKEVwu1B2CF8kinhjURf8Yqa5OfSUt+/arozxFW+TUPOPw3TsDCRT/0u7BGRTEVUw==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/legacy.js?<?php echo rawurlencode($VERSION); ?>" integrity="sha512-LYos+qXHIRqFf5ZPNphvtTB0cgzHUizu2wwcOwcwz/VIpRv9lpcBgPYz4uq6jx0INwCAj6Fbnl5HoKiLufS2jg==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/privatebin.js?<?php echo rawurlencode($VERSION); ?>" integrity="sha512-OshNUdVPw5hnnHTh/83UJfR2yFu7bKBurjEeJ9PPr6F9u9f4eeqA5yZ88XR3RmAr7sIDwKGSvQvlVvTe5DrSZg==" crossorigin="anonymous"></script>

		<link rel="apple-touch-icon" href="<?php echo I18n::encode($BASEPATH); ?>img/apple-touch-icon.png" sizes="180x180" />
		<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
		<link rel="manifest" href="manifest.json?<?php echo rawurlencode($VERSION); ?>" />
		<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#ffcc00" />
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="theme-color" content="#ffe57e" />
	</head>
	<body role="document" data-compression="<?php echo rawurlencode($COMPRESSION); ?>">

		<div id="passwordmodal" tabindex="-1" class="modal fade" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<form id="passwordform" role="form">
							<div class="form-group">
								<label for="passworddecrypt"><?php echo I18n::_('Please enter the password for this paste:') ?></label>
								<input id="passworddecrypt" type="password" class="form-control" placeholder="<?php echo I18n::_('Enter password') ?>" required="required">
							</div>
							<button type="submit" class="btn btn-success btn-block"><?php echo I18n::_('Decrypt') ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="top-bar">
			<a class="reloadlink">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check">
					<rect width="8" height="4" x="8" y="2" rx="1" ry="1"/>
					<path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
					<path d="m9 14 2 2 4-4"/>
				</svg>
				DMBin
			</a>

			<button id="newbutton" type="button">
				<?php echo I18n::_('New'), PHP_EOL; ?>
			</button>
		</div>

		<div id="options">
			<ul class="options-list">
				<li id="loadingindicator" class="hidden">
					<?php echo I18n::_('Loading…'), PHP_EOL; ?>
				</li>

				<li class="dropdown">
					<select id="pasteExpiration" name="pasteExpiration" class="hidden">
						<?php foreach ($EXPIRE as $key => $value) : ?>
								<option value="<?php echo $key; ?>"<?php if ($key == $EXPIREDEFAULT) : ?> selected="selected"<?php endif; ?>>
									<?php echo $value; ?>
								</option>
						<?php endforeach; ?>
					</select>

					<a id="expiration" href="#" class="w-btn dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<?php echo I18n::_('Expires'); ?>: <span id="pasteExpirationDisplay"><?php echo $EXPIRE[$EXPIREDEFAULT]; ?></span>
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<?php foreach ($EXPIRE as $key => $value) : ?>
							<li>
								<a href="#" data-expiration="<?php echo $key; ?>">
									<?php echo $value, PHP_EOL; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>

				<li class="dropdown">
					<select id="pasteFormatter" name="pasteFormatter" class="hidden">
						<?php foreach ($FORMATTER as $key => $value) : ?>
							<option value="<?php echo $key; ?>"<?php if ($key == $FORMATTERDEFAULT) : ?> selected="selected"<?php endif; ?>>
								<?php echo $value; ?>
							</option>
						<?php endforeach; ?>
					</select>

					<a id="formatter" href="#" class="w-btn dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<?php echo I18n::_('Format'); ?>: <span id="pasteFormatterDisplay"><?php echo $FORMATTER[$FORMATTERDEFAULT]; ?></span>
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<?php foreach ($FORMATTER as $key => $value) : ?>
							<li>
								<a href="#" data-format="<?php echo $key; ?>">
									<?php echo $value, PHP_EOL; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>

				<?php if ($FILEUPLOAD) : ?>
					<li id="attach" class="hidden dropdown">
						<a href="#" class="w-btn dropdown-toggle"
							data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<?php echo I18n::_('Attach a file'); ?> <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li id="filewrap">
								<div>
									<input type="file" id="file" name="file" accept="image/*,.pdf" />
								</div>
								<div id="dragAndDropFileName" class="dragAndDropFile"><?php echo I18n::_('alternatively drag & drop a file or paste an image from the clipboard'); ?></div>
							</li>
							<li id="customattachment" class="hidden"></li>
							<li>
								<a id="fileremovebutton"  href="#">
									<?php echo I18n::_('Remove attachment'), PHP_EOL; ?>
								</a>
							</li>
						</ul>
					</li>
				<?php endif; ?>
			</ul>
		</div>

		<main>
			<section>
				<?php if (strlen($NOTICE)) : ?>
					<div role="alert" class="alert alert-info">
						<?php echo I18n::encode($NOTICE), PHP_EOL; ?>
					</div>
				<?php endif; ?>

				<div id="largefilenotice" role="alert" class="hidden alert alert-danger">
					File size must be less than 1MB.
				</div>

				<div id="wrongfiletypenotice" role="alert" class="hidden alert alert-danger">
					Please upload only image and PDF files.
				</div>

				<div id="remainingtime" role="alert" class="hidden alert alert-info"></div>

				<?php if ($FILEUPLOAD) : ?>
					<div id="attachment" role="alert" class="hidden alert alert-info">
						<a class="alert-link"><?php echo I18n::_('Download attachment'), PHP_EOL; ?></a>
					</div>
				<?php endif; ?>

				<div id="status" role="alert" class="alert alert-info<?php echo empty($STATUS) ? ' hidden' : '' ?>">
					<?php echo I18n::encode($STATUS), PHP_EOL; ?>
				</div>

				<div id="errormessage" role="alert" class="<?php echo empty($ERROR) ? 'hidden' : '' ?> alert alert-danger">
					<?php echo I18n::encode($ERROR), PHP_EOL; ?>
				</div>

				<noscript>
					<div id="noscript" role="alert" class="alert alert-warning">
						<?php echo I18n::_('JavaScript is required for %s to work. Sorry for the inconvenience.', I18n::_($NAME)), PHP_EOL; ?>
					</div>
				</noscript>

				<div id="oldnotice" role="alert" class="hidden alert alert-danger">
					<?php echo I18n::_('%s requires a modern browser to work.', I18n::_($NAME)), PHP_EOL; ?>
					<a href="https://www.mozilla.org/firefox/">Firefox</a>,
					<a href="https://brave.com/">Brave</a>,
					<a href="https://www.opera.com/">Opera</a>
				</div>

				<?php if ($HTTPWARNING) : ?>
					<div id="httpnotice" role="alert" class="hidden alert alert-danger">
						<?php echo I18n::_('This website is using an insecure connection! Please only use it for testing.'), PHP_EOL; ?><br />
						<span class="small"><?php echo I18n::_('For more information <a href="%s">see this FAQ entry</a>.', 'https://github.com/PrivateBin/PrivateBin/wiki/FAQ#why-does-it-show-me-an-error-about-an-insecure-connection'); ?></span>
					</div>
					<div id="insecurecontextnotice" role="alert" class="hidden alert alert-danger">
						<?php echo I18n::_('Your browser may require an HTTPS connection to support the WebCrypto API. Try <a href="%s">switching to HTTPS</a>.', $HTTPSLINK); ?>
					</div>
				<?php endif; ?>

				<div id="pastesuccess" class="hidden">
					<div role="alert">
						<div id="deletelink" class="w-btn"></div>
						<div id="pastelink" class="alert"></div>
					</div>
				</div>

				<ul id="editorTabs" class="tabs">
					<li role="presentation" class="active">
						<a class="w-btn edit" role="tab" aria-selected="true" aria-controls="editorTabs" id="messageedit" href="#">
						<?php echo I18n::_('Editor'); ?>
						</a>
					</li>

					<li role="presentation">
						<a class="w-btn preview" role="tab" aria-selected="false" aria-controls="editorTabs" id="messagepreview" href="#">
							<?php echo I18n::_('Preview'); ?>
						</a>
					</li>
				</ul>
			</section>

			<section>
				<div id="placeholder" class="hidden"><?php echo I18n::_('+++ no paste text +++'); ?></div>
				<div id="attachmentPreview" class="text-center hidden"></div>
				<div id="prettymessage" class="hidden">
					<pre id="prettyprint" class="prettyprint linenums:1"></pre>
				</div>
				<div id="plaintext" class="hidden"></div>
				<p>
					<textarea id="message" name="message" rows="12" class="hidden"></textarea>
				</p>
			</section>

			<div class="actions">
				<?php if ($PASSWORD) : ?>
					<div id="password" class="hidden">
						<input type="password" id="passwordinput" placeholder="<?php echo I18n::_('Password (optional)'); ?>" />
					</div>
				<?php endif; ?>

				<div class="sendButton">
					<button id="sendbutton" type="button" class="hidden">
						<?php echo I18n::_('Send'), PHP_EOL; ?>
					</button>
				</div>
			</div>

			<section>
				<div id="noscript" role="alert" class="alert alert-info noscript-hide">
					<?php echo I18n::_('Loading…'); ?><br />
					<span class="small"><?php echo I18n::_('In case this message never disappears please have a look at <a href="%s">this FAQ for information to troubleshoot</a>.', 'https://github.com/PrivateBin/PrivateBin/wiki/FAQ#why-does-the-loading-message-not-go-away'); ?></span>
				</div>
			</section>

			<footer>
				<p>
					E2E Encrypted PasteBin - <b><?php echo I18n::_('Because ignorance is bliss'); ?>.</b>
					<br>
					<small>
						A public instance of <a href="https://privatebin.info/">PrivateBin</a> - a minimalist, open source online pastebin where the server has zero knowledge of pasted data.
					</small>
				</p>

				<small class="version">v. <?php echo $VERSION; ?></small>
			</footer>
		</main>

		<?php if ($FILEUPLOAD) : ?>
			<div id="dropzone" class="hidden" tabindex="-1" aria-hidden="true"></div>
		<?php endif; ?>
	</body>
</html>
