<!DOCTYPE HTML>
<html lang="en-US">
<head>
        <meta charset="UTF-8">
        <title>GIT DEPLOYMENT SCRIPT</title>
</head>


<?php
	/**
	 * GIT DEPLOYMENT SCRIPT
	 *
	 * Used for automatically deploying websites via github or bitbucket, more deets here:
	 *
	 *		https://gist.github.com/1809044
	 */
	// The commands
	$commands = array(
                // Status
		'echo $PWD',
		'whoami',
		// Update Repo
		'git fetch',
		'git reset --hard origin/master', // force pull
		'git status',
		'git submodule sync',
		'git submodule update',
		'git submodule status',
    'generate-md --layout cust-markdown --input ./projects --output .', // render projects

	);
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command . " 2>&1");
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}
	// Make it pretty for manual user access (and why not?)
?>


<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | Git Deployment Script v0.1 |
 |___==___|  /              &copy; oodavid 2012 |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>
