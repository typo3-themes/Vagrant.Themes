*******************************************************************************
$Id: README.txt 2388 2011-01-25 20:16:42Z ohader $
*******************************************************************************

This document is a part of the TYPO3 project. TYPO3 is an open source web
content management system released under the GNU GPL. TYPO3 is copyright
(c) 1999-2011 by Kasper Skaarhoj.

This document provides a basic introduction to TYPO3.


===============================================================================
1. Getting Started
===============================================================================

If you are new to TYPO3 it's strongly recommended that you first download and
install the Introduction Package.The Introduction Package gives a broad
overview of the common features of a TYPO3 installation, and can also be used
for the very first website by customizing colors and logos. A custom setup
guides the user through the installation. A default website with a clean XHTML
template with dozens of pages is created. The TypoScript configuration that is
provided with the package also serves as a best practice guide. Just download,
install and check out what best practices are for building a TYPO3 website.

You need a webserver with the required components installed to try out the
TYPO3 Introduction Package. If you don't have a webserver and want to test the
Introduction Package on your local PC, download one of the Installers first.

Please see the INSTALL.txt in this folder in order to set up a basic TYPO3
installation on your webserver.

  You can download installer packages here:
  http://typo3.org/download/installers/

  You can download the Introduction Package on SourceForge:
  http://sourceforge.net/projects/typo3/files/TYPO3_Introduction_Package/

  You can find a great tutorial for the Introduction Package on typo3.org:
  http://typo3.org/documentation/document-library/tutorials/doc_tut_quickstart/current/


===============================================================================
2. What is TYPO3?
===============================================================================

TYPO3 is a free and open source Content Management Framework. It is released
under the GNU General Public License. It can run on several web servers, such
as Apache or IIS, on top of many operating systems, among them Linux, Microsoft
Windows, OS/2, FreeBSD or Mac OS X.

TYPO3 was initially authored by Kasper Skårhøj. It is now developed by two
teams. The maintenance tree, version 4.x, team leader is Oliver Hader. The
development tree, version 5.x, team leader is Robert Lemke.

  To get more info about the GPL license, visit
  http://www.opensource.org/licenses/gpl-license.php


===============================================================================
3. What is a Content Management Framework?
===============================================================================

A Content Management Framework is more than just a content management system,
because of the separation of the streamlined core, and optional plugins
(extensions). TYPO3 has an open API that allows you to extend the frontend (web
site) and/or backend (administration) functionalities.
This concept of extension makes TYPO3 capable of being developed in almost any
way you can imagine, either by using any of the many extensions already
available, or writing your own.


===============================================================================
4. The TYPO3 core requirements
===============================================================================

TYPO3 is based upon PHP5, and uses a MySQL database. If you want to use the
graphics functions (which are highly recommended) you will need the PHP GDlib
extension, and the serverside image processing program GraphicsMagick or
ImageMagick (that are both available for almost all operating systems). For
more information regarding these requirements see the INSTALL.txt file in this
folder.
Using the Database Abstraction Layer (DBAL) allows one to use TYPO3 with other
Database Management Systems,like PostgreSQL, Oracle and MSSQL.


===============================================================================
5. What should you do if you have a problem?
===============================================================================

TYPO3 is a powerful and complex professional application. When you start, many
things will be out there that you simply don't understand, or that don't seem
to make sense. There is a widely used mailinglist (see resources below) where
many experienced users and developers lurk... they are always willing to help,
provided you followed these steps BEFORE you ask the list:

  1. Read the available documentation carefully.
     http://www.typo3.org/documentation/

  2. Search the mailinglist archive carefully.
     http://lists.typo3.org

  3. Getting help for free?
     http://typo3.org/community/mailing-lists/

  4. If you still can't figure it out - ask on a mailing list:
     - Newsgroup:  news://lists.typo3.org/ (preferred!)
     - Mailing-List: http://lists.typo3.org

     Please be aware that if you ask questions that are answered in the
     available documentation, you may not get a reply, or any help from
     the developers or any experienced users!

  5. If you have identified a genuine new bug report it at
     http://bugs.typo3.org/ - do not post to the mailing list about it.


===============================================================================
6. TYPO3 resources
*******************************************

http://www.google.com/search?q=typo3 - no just kidding, here is an overview of
the most important TYPO3 resources that should be checked first.

  http://typo3.com
  ********************
  Homepage of TYPO3.
  Here you find related TYPO3 related links as well as more general
  overview of TYPO3

  http://typo3.org
  ********************
  TYPO3 Community/Projects related platform.
  This is the place to go for TYPO3 developers and admins, mailing list
  archives etc.

  http://typo3.org/community/mailing-lists/
  *********************************************
  The TYPO3 mailinglist information site.

  It is recommended to use a newsreader for posting to any of these lists:
  news://lists.typo3.org/

  http://wiki.typo3.org
  *************************
  TYPO3 Wiki homepage

  Documentation
  *************
  TYPO3 is once of the most thoroughly documented OpenSource products around,
  with manuals covering basic tutorials, TypoScript, administration,
  development, core structure, etc.
  You should make the time to locate the various documents, and read those that
  apply to the work you want to do. You'll find most of the questions you may
  need to ask will be answered somewhere. The documentation is available from
  http://www.typo3.org/documentation.


===============================================================================
7. Some final notes
===============================================================================

TYPO3 is said to be one of the most sophisticated PHP/internet related
applications available, and the more you play with it the more you will agree.

Due to the advanced level of the code and functionality, a degree of study,
time and perseverance is required to fully understand it, and get the best from
it. But keep trying, it's definitely worth it. TYPO3 is the Enterprise Content
Management System "for all".

The GPL license allows for developments that are based upon TYPO3 to also be
freely available under the GPL. Please remember this, because TYPO3 is  about
"Inspiring To Share". If you are making money with TYPO3 you can  donate or
become a member of the TYPO3 Association.

By becoming a supporting member, individuals and organisations mainly  fund
core development of TYPO3. The decision about what the funds are  used for, is
made in the Steeering Committee. These decisions will be made transparent to
the community and especially the supporting members.
Your funds will also serve for other purposes as laid out in the bylaws.

  Donate: http://www.typo3.org/donate
  Become a member of the TYPO3 Association:
  http://association.typo3.org/association/join-now/


===============================================================================
(copyleft) Nigel Jackson, Ingmar Schlecht
           A few additions & modifications made by Michael Stucki,
           Oliver Hader, Ben van 't Ende and others
===============================================================================
