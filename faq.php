<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" href="favicon.ico" type="image/png">
	<title>FAQ | Lollipop Online</title>
	<meta name="description" content="A decent portion of the questions you've ever had about the L:O probably answered">
	<meta name="theme-color" content="#fc0362">
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
</head>
<body>

<header>
	<a href="/">
		<h1 style="margin:0"><img id="logo" src="/pages/img/logo.png" alt="Lollipop Online"/></h1>
	</a>
	<nav id="headbuttons">
		<a href="https://discord.gg/hvfdrxVnyr" class="button_regular">Updates</a>
		<a href="/faq.php" class="button_regular">FAQ</a>
		<a href="/index.php" class="button_bold">Downloads</a>
		<a href="/features.php" class="button_bold">Features</a>
	</nav>
</header>

<section>
	<h1 id="lolipop-Online-faq">Lollipop Online FAQ</h1>
	<p>This page contains tons of useful information based on questions I get a lot about the project. This page is a little visually noisy, but feel free to CTRL+F and skim through the headers to find what you want.</p>
	<p>Also, if it says: "Wrapper: Online", this includes it, as it applies Lollipop Online too.</p>
</section>

<main>

<h2 id="about-lolipop-Online">About Lollipop Online</h2>

<h3 id="what-is-lolipop-Online">What is Lollipop Online?</h3>
<p>Lollipop Online (simply called “Online” for the rest of this page) is a continuation of the original Wrapper project, which was taken down approximately on 2020-04-17. Unlike the original, Online can not be taken down. Everything it needs to run is stored entirely on your computer. While its current use is for making content, the motive is to make a historical archive for the original Flash-based themes used with this editor.</p>

<h3 id="where-can-i-get-updates">Where can I get updates?</h3>
<p>You can join the Discord server here to get updates as they come out: <a href="https://discord.gg/hvfdrxVnyr">https://discord.gg/hvfdrxVnyr</a>
If you don’t want to use Discord, you could ask a friend who does to let you know when an update comes out, and they can send you the download link. Please do not email me asking for the latest version.</p>

<h3 id="will-it-work-forever-even-after-flash-is-retired">Will it work forever? Even after Flash is retired?</h3>
<p>It should, that’s the goal. Perhaps in the future when we all run 6000-bit machines implanted into our brains it won’t be compatible with that anymore, but I’m sure there’ll always be a way to run it. There is also futureproofing for Flash’s discontinuation, since Online includes a Flash install and a version of ungoogled-chromium that supports Flash. By default, it starts from this, but you can change that in settings.bat. The included Chrome should not be used for browsing beyond using Flash content. You can also look into projects like <a href="http://lightspark.github.io/">Lightspark</a> and <a href="https://ruffle.rs/">ruffle</a> that are attempting to recreate Flash.</p>


<h3 id="how-does-Online-work-exactly">How does Online work exactly?</h3>
<p>Well, it still uses the Node.js app the original Wrapper ran on. The reason this runs on heroku is mostly cause github pages does not support node.js packages.</p>


<h2 id="using-Online">Using Lollipop Online</h2>

<h3 id="how-do-i-use-it">How do I use it?</h3>
<p>Just get started!</p>

<

<h2 id="wrapper-isnt-working">Lolipop isn’t working!</h2>

<h3 id="the-launcher-is-crashing">The launcher is crashing!</h3>
<p>There’s likely not much way to solve this on your own. You should turn on VERBOSEWRAPPER in settings.bat, open a command prompt window, drag start_lolipop.bat onto it, and run it. Then, when it crashes, take a screenshot and post it in our Discord server. If you’re tech savvy enough to understand whatever error pops up, feel free to elaborate.</p>

<h3 id="the-editorcharacter-creator-wont-load">The editor/character creator won’t load!</h3>
<p>The cause of this is usually an error with http-server, the software Online uses to host the asset files. To see its output, turn on VERBOSEWRAPPER in settings.bat. If there’s an error, then you might just have to ask for support in the Discord. If there’s no error however, you might simply have to make your browser trust the HTTPS certificate. Normally this is automatically fixed by the launcher, but it may have broken, and Firefox users simply have to deal with this sadly. Because, as a Firefox user, Firefox has to be <strong>special</strong>. This is not a concern beyond annoyance, as you’re just connecting to yourself and nobody else can connect. But if you see a notice like this on a real website, <em>that</em> is a cause for concern and you should avoid the website. To fix this, you can visit <a href="https://localhost:4343">https://localhost:4343</a> or open the server page with the launcher, and add a security exception.</p>

<h2 id="a-feature-isnt-hereworking">A feature isn’t here/working!</h2>

<
<h3 id="business-friendly-and-whiteboard-are-missing">Business Friendly and Whiteboard are missing!</h3>
<p>I go into this in more detail in the legalese section, but basically Vyond is still using them so I won’t include them in Online.</p>

<h3 id="watermarks-arent-working">Watermarks aren’t working!</h3>
<p>This is likely tied to file uploading not working. You’re likely better off either placing them over your video as a prop, or using a video editor to place them on your video. My recommendations are Kdenlive and OpenShot, both of them are libre software you can use for free.</p>

<h3 id="some-tts-voices-wont-generate">Some TTS voices won’t generate!</h3>
<p>Some of them will never generate if your message is too long, as the current limit gives too much room and can go over what the voice services allow. If you’re generating a short message and some voices still don’t work, it may be possible that you’ve been rate-limited or a service has gone down. If all voices are not working, please check your internet connection.</p>

<h3 id="starters-arent-working">Starters aren’t working!</h3>
<p>I currently have no fix for this, you’ll just have to either copy them directly from projects or recreate them.</p>

<h3 id="resizing-set-in-the-character-creator-breaks-when-playing">Resizing set in the Character Creator breaks when playing!</h3>
<p>I currently have no fix for this, you’ll just have to size them manually in the editor. Head resizing should be working fine, it’s the size of the entire character that’s broken.</p>

<h2 id="lolipop-issues">Lolipop issues:</h2>

<h3 id="the-video-is-laggy-for-me">The video is laggy for me!</h3>
<p>Closing applications running in the background will help reduce lag and decrease the change of a notification/balloon popping up during recording. It's also better to keep your antivirus running because of Flash's security risks, but you can still disable it at your own risk. If that doesn't work, then you can try resizing the player window and reduce the amount of characters in your scene.</p>

<h2 id="can-i-use-Online-on">Can I use Online on…</h2>

<h3 id="macos-or-gnulinux">Anywhere?</h3>
<p>Yes, you can. For mobile download the puffin browser</p>

<h3 id="any-web-browser">Any web browser?</h3>
<p>As long as it allows you to run Flash, yes. You can change some options in settings.bat to change what browser it launches Online in, by default it launches with an included browser that supports Flash.</p>

<h3 id="chromeos">ChromeOS?</h3>
<p>ChromeOS is very heavily locked down, and supporting it would likely be troublesome to make, especially since Linux support would need to be made first. It might end up no longer working by the end of 2020 anyway, since Flash will be discontinued and there may not be a way to install it on ChromeOS past that point. Feel free to try it yourself though.</p>

<h3 id="ios-or-android">iOS or Android?</h3>
<p>No. Not unless you use some remote desktop trickery with a regular computer. This will never happen, Flash does not run on iOS at all, and the few Android versions out there are extremely old and barely work.</p>

<h3 id="windows-phone">Windows Phone?</h3>
<p>go back to 2013</p>

<h2 id="legalese-things-i-guess">Legalese things I guess</h2>

<h3 id="can-i-copy-modify-lolipop-Online">Can I copy/modify Lollipop Online?</h3>
<p>Absolutely! I’m a huge libre software advocate, and if you want to change something or make your own version or whatever, please feel free! Just about everything in Online is under the MIT license, except for the original GoAnimate code (obviously) and ungoogled-chromium (which is under the BSD 3-Clause license). If you do make changes, let me know and I’d be glad to look into putting them in official releases :)</p>
<p>You can free to customize the LVM as it applies Lollipop Online.</p>

<h3 id="why-was-the-original-wrapper-shut-down">Why was the original Wrapper shut down?</h3>
<p>The original Wrapper had the flaw of being hosted on a website. Without that website, it can’t function. And because Vyond didn’t want it to be there, they requested that it’s taken down. Despite what people say about CyanAnimate or whoever causing it, the developer of Wrapper, VisualPlugin, actually contacted Vyond directly asking if it was okay right after release. Online has fixed this flaw, and the only way to get rid of it is to raid the homes of everyone who has a copy and burn their hard drive. In case it isn’t obvious, that won’t happen. The torrent download is meant to make it harder to take down as well.</p>

<h3 id="why-is-business-friendly-missing">Why is Business Friendly missing?</h3>
<p>Vyond still uses that theme, and unless they abandon the theme I have no good reason to keep it in Online. It’s still available in their paid service, and even if it’s an inferior version it’s effectively just piracy at that point. Removing it, as well as a few other themes, is to try to avoid hurting Vyond. To quote the original Wrapper dev, VisualPlugin, on why Vyond took it down: “Vyond’s objection is my unauthorised use of their intellectual property and their logo. It doesn’t matter if it’s Comedy World or Business Friendly - it’s all theirs.” And while they’re all still theirs, the original themes are completely abandoned and without Wrapper: Online they would be completely unarchived beyond what’s shown in videos. This project is important to make sure that they are preserved. Business Friendly doesn’t need preservation right now.</p>

<h3 id="why-do-you-avoid-mentioning-the-original-service-goanimatevyond">Why do you avoid mentioning the original service GoAnimate/Vyond?</h3>
<p>Because they are NOT affiliated or endorsing this project in any form. Lollipop Online is and almost certainly always will be a completely separate project. That’s why the full name is simply Wrapper: Online, and referring to it with that company’s name (such as calling it GoAnimate Wrapper Online) is wrong.</p>

<h3 id="wait-youre-using-vyonds-copyrighted-material-thats-illegal">Wait, you’re using Vyond’s copyrighted material, that’s illegal!</h3>
<p>We are using their copyrighted material, yes. I don’t think there’s any denying that. But I’m trying to avoid hurting Vyond. I already removed all the themes used in current Vyond (business friendly, whiteboard, etc) because I don’t want to intrude on their user base, and I removed their branding as best as I could to separate this project from them and show that we aren’t affiliated in any way. I’ve also added a disclaimer when starting Online for the first time to make people fully aware of what they’re going into. If people want a solid fast engine with professional themes, they’ll go to Vyond, and I know there are people that genuinely use their service for business purposes. If people just want to make silly YouTube videos using themes they’re nostalgic for, or want to see a historical archive of these old abandoned themes, they’ll come here. The way I see it, the content in Online has all been abandoned and mostly given a negative image  (grounded videos) that makes them avoided, and this is a way for us to preserve them for future people to learn about. By the time the copyright expires, nobody will care enough to preserve it. And I’m a strong believer that software should be preserved once it’s been abandoned. If I download and play an old game that’s no longer being sold officially, they’ve already stopped people from giving them money for it. I view this the exact same way. An obscure Garfield puzzle game from a decade ago only a few people remember deserves the same preservation as a famous game everyone played when it released. I’ve said it before, and I’ll keep saying it for likely the rest of my life.</p>

</main>

<footer>
	<nav id="foot-left">
		<a href="https://discord.gg/hvfdrxVnyr">L:O Server (Updates)</a>
	</nav>

	<nav id="foot-right">
		<a href="/index.php">Server Page (Downloads)</a>
	</nav>
</footer>

</body></php>
