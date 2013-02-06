ChurchWeb
====

Packaged online apps for churches including: a website, a church directory, a worship planner, and a content management system.

TODO:
----



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
