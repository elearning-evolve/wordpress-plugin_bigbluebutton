# Video Conferencing with BigBlueButton (BBB) #


Contributors: blindsidenetworks, jfederico, yfngdu, elearningevolve, adeelraza_786@hotmail.com  
Donate link: https://elearningevolve.com/products/donate/  
Tags: bigbluebutton, videoconferencing, virtual classroom, web conferencing, online teaching, learning management system. lms  
Requires at least: 5.1  
Tested up to: 5.9.3  
Requires PHP: 7.2  
Stable tag: 1.2.0  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

A [BigBlueButton (BBB) WordPress plugin](https://wordpress.org/plugins/video-conferencing-with-bbb) that enables you to create virtual classrooms on your WP site. BigBlueButton is an open-source video conferencing tool that is "Built For Teachers".

## Description ##

[Video Conferencing with BBB](https://wordpress.org/plugins/video-conferencing-with-bbb) integrates [BigBlueButton](https://bigbluebutton.org/) into WordPress through which teachers can manage their virtual classrooms right from the WP dashboard.

This plugin is a fork of the [BigBlueButton plugin](https://wordpress.org/plugins/bigbluebutton/) initially released by Blindside Networks but no longer maintained.

BBB is an open-source video conferencing tool that is designed and **"Built For Teachers"**. It has all the core features you would expect in a web conferencing system. Additionally, it offers features that can empower teachers to engage their students in the virtual classroom by enabling active collaboration.

[See All BBB Features](https://support.blindsidenetworks.com/hc/en-us/articles/360052738972-What-are-the-features-in-BigBlueButton-)

### BBB WordPress Plugin Features ###
The BBB WordPress plugin enables the user to create BBB rooms right from the WordPress dashboard. Once the room is created it can be added to any WordPress page through a simple shortcode. There is also a possibility to enter multiple rooms in the shortcode to let the user choose the room that they want to join.

The student can simply click Join from the page where the shortcode is added and enter the BBB room where the teacher can initiate a virtual classroom session.

After the session is over the plugin can also display the recording of the session on the same page so that the students can take the keynotes from the session later on.

**There is also a Pro version available with this plugin that offers more features, [learn more](https://elearningevolve.com/products/video-conferencing-with-bigbluebutton-pro/)**.

To get up and running in no time with a managed BigBlueButton hosting provider please refer to our [Recommended BBB hosting providers](https://elearningevolve.com/blog/bigbluebutton-hosting).

For further queries feel free to [contact us](https://elearningevolve.com/contact/).

## Installation ##

Here's an overview of the installation.

   1. Log in as an admin and click on the Plugins menu on the sidebar.
   1. Click Add new.
   1. In the search bar enter "Video Conferencing with BBB" and click search plugins.
   1. When you find the plugin called Video Conferencing with BBB by eLearning evolve click the install now link.
   1. Activate the Plugin.
   1. Click on BBB Rooms in the sidebar and click on Server Settings.
   1. Fill out the URL of where the BigBlueButton server is running (be sure to add /bigbluebutton/ to the end of the URL) and it's salt. Then click on Save.
   1. Click on BBB Rooms in the sidebar.
   1. Add a new room and publish it.
   1. Click on BBB Rooms in the sidebar again and copy the token of your new room.
   1. Click on widgets under the Appearance menu.
   1. Find the BBB Rooms Widget. Then click and drag it to either the right, content or footer windows on the right of the screen depending on where you wish the BBB Rooms widget to appear.
   1. Enter the token you copied earlier into the widget and save it.
   1. You are ready to begin creating meetings and holding conferences.

## Frequently Asked Questions ##

**How do I create meetings?**
After activating the BigBlueButton plugin, click on "BBB Rooms" and "Add New" and give the meeting a title and fill out the room details.

**How can users join the meetings?**

Users join meetings using a join room form. This form can be shown on a site as a sidebar element or as a page/post.

For setting up in the sidebar, add the BBB Rooms widget, as you do with any other widget, dragging the box to the position you want it to be in.

By default, each room will be on its own page, with the permalink listed in the BBB Rooms page on the admin panel. BBB Rooms can also be inserted into any post/page using the **[bigbluebutton] shortcode** with specified tokens, token1, token2 in the shortcode in the format,
`[bigbluebutton token="token1,token2"]`

**How can users view recordings?**

By default, each room will have its own page, which will display the room description, join button, and recordings.

To place recordings on a separate post/page, use the shortcode `[bigbluebutton type="recording"]`, with the room tokens of the desired recordings. For example, the recordings for the tokens, token1, token2 can be displayed using,
`[bigbluebutton type="recording" token="token1, token2"]`

**How to let users select a specific BBB room to join from frontend**

Insert the token of your BBB Room that you would like the users to select from in the shortcode with this format, `[bigbluebutton token="token1,token2"]`

**I've migrated my rooms. Now it says they're missing when I try to access them!**
Please try going to settings, and save permalinks. There is no need to change your permalink structure.

**I'm an admin and when I tried to enter a room, I couldn't enter as a moderator.**
Please try deactivating the plugin, and reactivating it again.

**Why sometimes the Name and Password are required, some others only the Name and others only the Password?**

The plugin gathers the much information it can from WordPress, but what will be taken depends on the configuration.

For registered users, their registered name or username will be taken as their Name.

For registered users whose role has been set for requiring always a password, only the Password will be required.

For anonymous users, the Name will be always required, but again the Password requirement will depend on the configuration. If Moderator/Attendee capability has been set for them no Password box will be shown in their join room form.

**How can I change the permissions of the users?**

You should install and activate the **"User Role Editor" plugin by Vladimir Garagulya** and in the Dashboard under the **"Users" > "User Role Editor",** update the permissions.

To allow another user to create and edit rooms, assign them a role that has the permissions, **publish_bbb_rooms, edit_bbb_rooms, edit_posts, delete_bbb_rooms, delete_published_bbb_rooms, and edit_published_bbb_rooms.** The permission structure is similar for posts and pages.

To allow another user to create and edit room categories, assign them a role that has the permissions, **manage_categories.** This does not give them permission to create rooms. They can only manage room categories.

To allow another user to join as moderator, viewer, or with a code, assign them to a role with one of the corresponding permissions, **join_as_moderator_bbb_room, join_as_viewer_bbb_room, or join_with_password_bbb_room.** By default, the owner of the room will always join their rooms as a moderator. The default does not apply to others' rooms.

To allow another user to manage recordings, assign them to a role that has the permission, **manage_bbb_room_recordings.**

To allow another user to use shortcodes or the widget, assign them to a role that has the permission, **edit_bbb_rooms, edit_posts.**

If there are no roles with the corresponding permissions, please create a custom role using the **"Members" plugin** and assign the permission to that role.

**Is there any way users can go directly into a meeting?**

To provide direct access to the meeting rooms by adding the meeting token ID to the shortcode: `[bigbluebutton token="aa2817f3a1e1"]`

The joining form is the same, so with the right permission configuration users would be able to join meetings with one click.

**Why is it giving an error about creating a meeting room?**

Make sure you are using BigBlueButton 0.8 or higher. Ensure the server settings are configured correctly.

**How can I improve security?**

You should enable the curl extension in php.ini.

**I tried to preview my room, and nothing showed up!**

BBB Rooms may not be viewed until they are published. Please try again after publication.

**I want to edit my recordings. How do I do that?**

If a user has the capability to manage recordings, they will see a pencil icon next to the recording name and description. Click on the icon to start editing, and press enter to submit. A user can cancel editing by pressing the ESC key.

## Screenshots ##

1. Features: Audio - built-in and dial-in numbers (in some regions), Video - low, medium, and high resolution, Screen sharing, Chat (public/private), Upload slides (any PDF, Microsoft PowerPoint, Word, or Excel), Whiteboard annotation, Multi-user whiteboard, Breakout rooms, Shared notes, Raise hand, Emojis, Polling, Share external video, Recordings, Browser and Mobile Friendly HTML5 interface, runs on desktop, laptop, and mobile devices using iOS 12.2+ and Android 6.0+.
2. BBB Meeting Room.
3. BBB Rooms are a Content Type that has its own view.
4. BBB Rooms can be embedded into Posts, Pages, and other Content Types using shortcodes.
5. Multiple rooms can be accessed from the same Page or Post.
6. Server settings define where the meetings are hosted.
7. BBB Rooms can be managed through the Administrator Dashboard.
8. BBB Rooms can also be organized using Categories.

## Changelog ##
### 1.2.0 ###
* Added: Compatibility for per shortcode max participant room limit in Pro plugin
* Added: Compatibility for pre upload presentation (global and per room basis) in Pro plugin
* Added: Shortcode usage guide on the plugin settings page

### 1.1.6 ###
* Fixed: You did not pass the checksum security check error on room join with BBB On Demand Server

### 1.1.5 ###
* Fixed: The page can't be found error when viewing a BBB room
[Action needed] Please deactivate and activate the plugin to apply this fix

### 1.1.4 ###
* Added: compatibility for the max room participant limit feature added in Pro plugin

### 1.1.3 ###
* Added: compatibility for the room start time & countdown feature added in Pro plugin
* Fixed: Super admin can not login WP multisite after activating the plugin

### 1.1.2 ###
* Added: Our [Pro version](https://elearningevolve.com/products/bigbluebutton-wordpress-pro/) release notice on the plugin settings page

### 1.1.1 ###
* Updated: Removed the need to assign activate_plugins user permission for admin BBB Rooms menu.
* Added: Use capability "publish_bbb_rooms" for admin BBB Rooms menu access by any user role.

### 1.1.0 ###
* Updated: Replaced the older test server credentials of Blindside Networks by [Bigbluebutton.host](https://bigbluebutton.host/) test server in plugin settings.
* Fixed: Blindside Networks test server not working anymore, not able to join rooms.
* Updated: Minor style changes, room join form center aligned with the page.

### 1.0.4 ###
* Added: [Our Recommended BBB hosting providers](https://elearningevolve.com/blog/bigbluebutton-hosting) blog in plugin settings.
* Compatibility: Tested with WP version 5.9.1.

### 1.0.3 ###
* Fixed: EndPoint URL & Shared Secret/Salt settings not saved and shows error sometimes.
* Improvement: Make error messages & recording page button text more user-friendly.
* Improvement: Added new hooks in plugin.

### 1.0.2 ###
* Tested: compatibility with WordPress v5.8.3.
* Improvement: Added new hooks in plugin.
* Improvement: Security enhancement on recordings section.

### 1.0.1 ###
* Fixed: plugin warning messages on WP dashboard.
* Improvement: Readability of plugin conflict messages.

### 1.0.0 ###
* Improvement: Security enhancement on room join page.
* Improvement: Tested with WP version 5.8.2.
* Improvement: Ability to copy the shortcode from the BBB Rooms listing page.
* Improvement: Use HTTPS version for the test bigbluebutton endpoint
