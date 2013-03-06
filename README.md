ChurchWeb
====

Packaged online apps for churches including: a website, a church directory, a worship planner, and a content management system.

TODO:
----

* Move Worship planner into CodeIgniter app
* Figure out database schema
* Find/make some themes (figure out how to do theming, if it's just css, or view replacement)
* Look into using BootStrap
* Licensing concerns (which OS license?)
* Look into TinyMCE

Notes:
----

Originally was going to do as a customized WordPress distribution. Decided against this for a number of reasons:

* Integrating the Worship Planner will be easier this way (no need to bundle it as a WordPress plugin)
* Managing a large system of plugins across updates is not a good idea. If it's a monolithic system it will have fewer problems with version differences.
* The MySQL dependency is somewhat irritating for both deployment and development. SQLite will be faster and easier to deal with.

Disadvantages of this include:

* Going to have to watch the security pretty closely
* Make sure that the user experience matches that of WordPress... will take *time*
* Will likely take more time to develop overall (essentially a customizable CMS)

Open-sourcing this makes sense, because it's a convenience solution. No secret algorithms or proprietary content. If someone wants to pull the code and do setup themselves, go for it.

Features
----

* Choose a site theme (from a couple of different ones) - maybe learn how to use WP themes?
* Mainly static content. People are familiar with pages. Joomla made those a hassle. Don't do that.
* User-definable "publishing" pages. Things like newsletter, sermons, pastor's blog, etc. Things you'd submit content to.
* Clean URLs
* Access control for viewing parts of the site.
* Access control for *editing* parts of the site. Try and get good granularity.
* Embedded calendar! (Google calendar plugin)
* Media management. Pictures are a must. Video/sound would be nice? 
* Mass-contact/user update tool (CSV)
* Preferably TinyMCE as the page editor
* Easily accessable site search feature
* Integrate with Google Forms

Non-Code Features
----

* email addresses (?) and domain
* shared hosting of some sort (probably don't need Amazon Web Services or a dedicated cloud server, but we'll see...)
* 