# <img src="https://i.imgur.com/CIcpjIc.png" width="10%">&nbsp;Cornell Business Review Website


## Getting Started

https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/

### Setting Up Your Environment

#### Installing MAMP
* Download [MAMP](https://www.mamp.info/en/downloads/) from here
* Once installed, open MAMP (not MAMP Pro)
* Click on ```Start servers```
* Once the button turns green, a new tab should open in your browser, if not click ```Open WebStart page```
* Your tab should have the Welcome to MAMP message along with your version number (5.7 as of this writing)

#### Installing WordPress
* Create an empty directory on your computer to store this project
* Download [Wordpress](https://wordpress.org/download/) from here
* Unzip the download and place all the unzipped files into the directory you created earlier

#### Connecting MAMP to Your Project Directory
* Open MAMP and start the servers as above, leading you to the same welcome page
* Go to ```MAMP > Preferences > Web Server > Select``` and select your project directory, then click OK
* Go back to the welcome page tab on your browser and click on the link that says ```phpMyAdmin```
* In the newly opened page, click on the ```Databases``` tab
* Under ```Create database``` enter the name of your database and click ```Create```

#### Setting Up WordPress
* In a new tab, go to ```localhost:8888```
* From there you should be prompted to select a language, create a login, and perform a few tasks to set up your WordPress account
* Finally, you should be able to access the WordPress backend console

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Authors

* [**Rishik Zaparde**](https://github.com/rishikzap)

See also the list of [contributors](https://github.com/orgs/Cornell-Business-Review/people) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details


