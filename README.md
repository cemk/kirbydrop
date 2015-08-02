# Kirbydrop - File list theme for Dropshare uploads

[Kirbydrop](http://kirbydrop.webflow.io) is a [Kirby CMS](http://getkirby.com) theme to list your [Dropshare](http://getdropsha.re) uploads.

##Installing Kirby and Kirbydrop
1) Get Kirby’s plainkit, the barebones Kirby installation.

    git clone --recursive https://github.com/getkirby/plainkit.git .’

2) Get Kirbydrop, and place the files into the Kirby installation.
```
git clone https://github.com/cemk/kirbydrop.git
cd kirbydrop
rsync -r * ../
```

##Setting up Dropshare
3) Create a new *SCP over SSH* connection with your server details.  
4) “Save files at:” should be *[path up to Kirby root]/contents/uploads*. Set “URL to path:” as the root URL of your Kirby installation.  
5) Put the *Dropshare-LandingPage.html* file to your Documents folder, turn on “Create Landing Page for your uploads” from Dropshare settings, and select “Use own design.”

###Make sure to...
- Have PHP 5.5+  
- Enable mod_rewrite  
- “Completely Randomize” filenames from Dropshare’s Upload settings  
- Optionally, install the Relative Date plugin by distantnative  
