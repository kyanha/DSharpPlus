# DiscordClient Methods
 

The <a href="8f8cbf24-03e9-53cc-389f-2ba10a699065">DiscordClient</a> type exposes the following members.


## Methods
&nbsp;<table><tr><th></th><th>Name</th><th>Description</th></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="b7e67c96-202b-3abc-20c9-229445d4a20a">AcceptInvite</a></td><td>
(Client account only) accepts an invite to a server.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="ccc161c7-c3a0-ef53-08f6-f7be9eff3be4">AddAuthorListener</a></td><td>
Adds a listener for when this member sends a message.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="9ecaaddc-8174-f425-39af-08d79a857224">AddChannelListener</a></td><td>
Adds a listener for when a message is sent in this channel.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="740ac434-da5e-b90f-e90d-1a57ea8b02d6">AddCommand(DiscordCommand)</a></td><td>
Adds a command to this DiscordClient</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="e789fea8-947e-a197-8035-69ecfc8db514">AddCommand(DiscordCommandBuilder)</a></td><td>
Adds a command to this DiscordClient</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="8d4d9feb-0705-9aa3-1460-0fe866c95cb0">AddKeywordListener</a></td><td>
Adds a listener for when a message with a specific keyword is sent.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="2fc06450-7fb3-c761-11ee-5436c356d63c">AddPrefix</a></td><td>
Adds a prefix for commands.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="3bd633e6-bf1e-3f62-de5b-21f46bbbc133">AssignRoleToMember(DiscordServer, DiscordRole, DiscordMember)</a></td><td>
Assigns a specified role to a member, given you have the permission.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="fc422141-4095-74d6-4dd1-5440953cd683">AssignRoleToMember(DiscordServer, List(DiscordRole), DiscordMember)</a></td><td>
Assigns the specified roles to a member, given you have the permission.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="69cca4bb-8a70-a307-e089-3266cc0e255e">AttachFile(DiscordChannel, String, Stream)</a></td><td>
Sends a file to the specified DiscordChannel with the given message.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="8722a52b-96a2-12ba-c5b3-3243e18f0925">AttachFile(DiscordChannel, String, String)</a></td><td>
Sends a file to the specified DiscordChannel with the given message.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="c7ab6d63-60ee-152d-ff73-617196977710">BanMember(DiscordMember, Int32)</a></td><td>
Bans a specified DiscordMember from the guild that's assumed from their parent property.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="177d82e8-de2c-f873-801a-08324aa134dd">BanMember(DiscordMember, DiscordServer, Int32)</a></td><td>
Bans a specified DiscordMember from the guild that's assumed from their parent property.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="3a72864c-6179-156e-5b74-684427b1776a">ChangeChannelTopic</a></td><td>
Changes the channel topic assosciated with the Discord text channel.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="f2f8bcfc-700a-375f-d2da-940a8f383145">ChangeClientAvatar</a></td><td>
Changes the current client's avatar. Any high resolution pictures are automatically downscaled and Discord will perform jpeg compression on them.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="d7b04ff4-1e6e-0a41-36fe-56287e16f8e1">ChangeClientAvatarFromFile</a></td><td>
Changes the current client's avatar from a file. Any high resolution pictures are automatically downscaled and Discord will perform jpeg compression on them.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="160b896b-98cc-a0df-efb8-6cd9f97e92e3">ChangeClientInformation</a></td><td>
Used for changing the client's email, password, username, etc.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="006baece-4f8c-4958-60a0-0444f45e5b29">ChangeGuildIcon</a></td><td>
Changes the icon assosciated with the guild. Discord will perform jpeg compression and this image is automatically downscaled.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="05ffadc9-1dfc-39cd-bfbd-6d3e7a9768e1">ClearAuthorListeners</a></td><td>
Clears all listeners for this member.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="a110e78b-1ccf-db72-b29a-6af708dcb2f6">ClearChannelListeners</a></td><td>
Clears all listeners for this channel.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="95197f0d-2e27-34a2-a298-1d635e6de1a5">ClearInternalMessageLog</a></td><td>
Clears the internal message log cache</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="3d242563-e71d-c3eb-8266-5708c4243b85">ClearKeywordListeners</a></td><td>
Clears all listeners for this keyword.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="9111a918-114d-33ee-a0c1-85820d6d9c9b">ClearOfflineUsersFromServer</a></td><td>
Iterates through a server's members and removes offline users.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="04ba806b-e80b-6344-e370-babdb72fd14e">Connect</a></td><td>
Runs the websocket connection for the client hooking up the appropriate events.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="2c0e7683-5dc9-0a15-cf0d-e9c1fa22cb23">ConnectedToVoice</a></td><td></td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="df95fa97-9c52-adb4-b2dc-09f9c2e665ad">ConnectToVoiceChannel</a></td><td>
Connects to a given voice channel.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="216aa5c6-1056-031c-f023-727674cf19fe">CreateChannel</a></td><td>
Creates either a text or voice channel in a DiscordServer given a name. Given you have the permission of course.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="2fe94478-16b8-f128-c057-8194656a3923">CreateGuild</a></td><td>
Creates an empty guild with only this client in it given the following name. Unknown if works on bot accounts or not.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="9c7b30cc-9915-d13b-cab3-a87f0bbafec1">CreateInvite</a></td><td>
Creates and invite to the given channel.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="d2118d09-b49c-2f7a-0a06-3a4aecf7495f">CreateRole</a></td><td>
Creates a default role in the specified guild.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="3e2f6239-297f-4370-a615-d7a517cde807">DeleteAllMessages</a></td><td>
Deletes all messages made by the bot since running.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="5c2bf9cb-2d6b-fc6b-cf5e-a762e32339ea">DeleteChannel</a></td><td>
Deletes a specified Discord channel given you have the permission.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="0a4640a8-805a-5f6a-9362-64b13eef16a3">DeleteInvite</a></td><td>
Deletes an invite by id</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="2e9c0cc1-21e2-79f3-fb08-561d89feaa8c">DeleteMessage(String)</a></td><td>
Deletes a message with a specified ID. This method will only work if the message was sent since the bot has ran.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="07758985-28ac-7e42-c20f-3e4e6cb5a7e1">DeleteMessage(DiscordMessage)</a></td><td>
Deletes a specified DiscordMessage.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="cb5786cb-b50f-706c-b102-d85529b6d686">DeleteMultipleMessagesInChannel</a></td><td>
Deletes the specified number of messages in a given channel. Thank you to Siegen for this idea/method!</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="4a010401-9a8d-ccf1-e41b-be6bf7a1a2bf">DeleteRole</a></td><td>
Deletes a specified role.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="02421028-467f-e868-d343-b4c06bf894f3">DeleteServer(String)</a></td><td>
(Owner only, non-bot only) Sends an http DELETE request to delete the server you specify by ID.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="2baad34f-31eb-e1f8-2fb1-2d1f584cac29">DeleteServer(DiscordServer)</a></td><td>
(Owner only, non-bot only) Sends an http DELETE request to delete the server you specify.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="5b6546c7-f379-06c9-9cbc-ce40cf3d393d">DisconnectFromVoice</a></td><td>
Also disposes</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="f680172d-c214-e91a-e4b1-137755c5c637">Dispose</a></td><td>
Disposes.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="c6f6557b-1235-851d-17ef-de72741250d4">EchoPacket</a></td><td>
Echoes a received audio packet back.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="c447d3a6-851f-1a33-2aea-649cc9575f5a">EditGuildName</a></td><td>
Edits the name of the guild, given you have the permission.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="df0a2ae2-73da-578e-6853-db0603d6bfe1">EditMessage</a></td><td>
If you screwed up, you can use this method to edit a given message. This sends out an http patch request with a replacement message</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="990081cb-3c04-954c-456f-9a1f8dd04235">EditRole</a></td><td>
Edits a role with the new role information.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="http://msdn2.microsoft.com/en-us/library/bsc2ak47" target="_blank">Equals</a></td><td>
Determines whether the specified <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a> is equal to the current <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.
 (Inherited from <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.)</td></tr><tr><td>![Protected method](media/protmethod.gif "Protected method")</td><td><a href="http://msdn2.microsoft.com/en-us/library/4k87zsw7" target="_blank">Finalize</a></td><td>
Allows an object to try to free resources and perform other cleanup operations before it is reclaimed by garbage collection.
 (Inherited from <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.)</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="1fb7d763-07ea-9d00-8735-8e3744ca47eb">GetBans</a></td><td>
Retrieves a DiscordMember List of members banned in the specified server.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="d3047b04-9cd6-e63d-1338-826520327cff">GetChannelByID</a></td><td></td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="07fdb49a-46d2-c86b-96e5-68eb4e30e2e3">GetChannelByName</a></td><td>
you probably shouldn't use this.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="http://msdn2.microsoft.com/en-us/library/zdee4b3y" target="_blank">GetHashCode</a></td><td>
Serves as a hash function for a particular type.
 (Inherited from <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.)</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="eb106538-6219-a5fc-7ed0-09c9d42b519a">GetInviteData</a></td><td>
Get data for an invite</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="f6d84118-41d2-cef5-f547-a748c01cf3b3">GetLastMessageSent()</a></td><td>
Gets last message sent</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="2c24897b-e167-891d-c2b9-45507da5e713">GetLastMessageSent(DiscordChannel)</a></td><td>
Gets last message sent in a channel</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="e7fe2b67-abf8-e294-538e-ffeb534fcf24">GetMemberFromChannel(DiscordChannelBase, String)</a></td><td></td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="1ac6ba1c-495d-80ae-503a-0d2d4b8c9e17">GetMemberFromChannel(DiscordChannelBase, String, Boolean)</a></td><td></td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="319f653f-6d62-9f9a-15f1-f38e10d19601">GetMessageHistory</a></td><td>
Returns a List of DiscordMessages.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="69f46f73-6144-ae00-d53c-e83a9caed8e8">GetMessageLog</a></td><td>
Any messages logged since connection to the websocket.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="f7e90ea2-7414-ca48-bf49-e03b9c417c7e">GetPrivateChannels</a></td><td>
Private channels assosciated with the account.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="e6f8672a-a863-609e-6c8e-95d155a83fa8">GetServerChannelIsIn</a></td><td>
Get the server a channel is in</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="1068ee09-6202-b8ee-0353-4e2928925842">GetServersList</a></td><td>
Current DiscordServers you're connected to.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="http://msdn2.microsoft.com/en-us/library/dfwy45w9" target="_blank">GetType</a></td><td>
Gets the <a href="http://msdn2.microsoft.com/en-us/library/42892f65" target="_blank">Type</a> of the current instance.
 (Inherited from <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.)</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="f6c33c49-901d-e383-dbdd-62de3d60a6a2">GetVoiceClient</a></td><td></td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="efde3810-73bc-1f35-40b3-32566e497e38">KickMember</a></td><td>
Kicks a specified DiscordMember from the guild that's assumed from their parent property.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="dce061c4-90e3-e11d-17b0-7302fde3854a">LeaveServer(String)</a></td><td>
(Owner only, non-bot only) Sends an http DELETE request to delete the server you specify.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="701733cb-c574-64de-534a-2f7343602b75">LeaveServer(DiscordServer)</a></td><td>
Sends an http DELETE request to leave the server you send in this parameter.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="ad4341a3-32ac-8b94-e2a5-8e62f19adbe5">Logout</a></td><td>
Logs out of Discord and then disposes.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="fbff6cc1-00f5-6323-f1f0-4348a3189d53">MakeInviteURLFromCode</a></td><td>
Just prepends https://discord.gg/ to a given invite :)</td></tr><tr><td>![Protected method](media/protmethod.gif "Protected method")</td><td><a href="http://msdn2.microsoft.com/en-us/library/57ctke0a" target="_blank">MemberwiseClone</a></td><td>
Creates a shallow copy of the current <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.
 (Inherited from <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.)</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="6d2f2621-72d5-616f-853d-16aad4f23610">RemoveBan(DiscordServer, DiscordMember)</a></td><td>
Removes a ban on the user.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="8c788c90-4f13-d20e-84ef-8d2a372fc7c7">RemoveBan(DiscordServer, String)</a></td><td>
Removes a ban on the user.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="c04f2679-4280-02c2-60f1-286ea02786bd">RemovePrefix</a></td><td>
Removes a prefix.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="ba06835e-04ef-fa87-a5bf-b105e31076ff">SendLoginRequest</a></td><td>
Sends a login request.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="cb933675-16a2-826b-e61d-3c35b4a06b71">SendMessageToChannel</a></td><td>
Sends a message to a channel, what else did you expect?</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="9e2705f3-fc65-9f24-5ed9-58d1ef0a0f2f">SendMessageToUser</a></td><td>
Sends a private message to the given user.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="http://msdn2.microsoft.com/en-us/library/7bxwbwt2" target="_blank">ToString</a></td><td>
Returns a string that represents the current object.
 (Inherited from <a href="http://msdn2.microsoft.com/en-us/library/e5kfa45b" target="_blank">Object</a>.)</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="ec9e679f-678c-626e-d021-eb77fdb33db1">UpdateBotStatus</a></td><td>
Updates the bot's status.</td></tr><tr><td>![Public method](media/pubmethod.gif "Public method")</td><td><a href="b0d47811-d11d-bc2a-b2f6-02407eafc0b2">UpdateCurrentGame</a></td><td>
Updates the bot's 'Currently playing' status to the following text. Pass in null if you want to remove this.</td></tr></table>&nbsp;
<a href="#discordclient-methods">Back to Top</a>

## See Also


#### Reference
<a href="8f8cbf24-03e9-53cc-389f-2ba10a699065">DiscordClient Class</a><br /><a href="503971eb-de5e-a570-9922-de9500a9b1cc">DSharpPlus Namespace</a><br />