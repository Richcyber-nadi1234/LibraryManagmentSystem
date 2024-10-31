var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// books table
books_addTip=["",spacer+"This option allows all members of the group to add records to the 'Books' table. A member who adds a record to the table becomes the 'owner' of that record."];

books_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Books' table."];
books_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Books' table."];
books_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Books' table."];
books_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Books' table."];

books_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Books' table."];
books_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Books' table."];
books_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Books' table."];
books_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Books' table, regardless of their owner."];

books_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Books' table."];
books_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Books' table."];
books_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Books' table."];
books_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Books' table."];

// NewsPapers table
NewsPapers_addTip=["",spacer+"This option allows all members of the group to add records to the 'NewsPapers' table. A member who adds a record to the table becomes the 'owner' of that record."];

NewsPapers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'NewsPapers' table."];
NewsPapers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'NewsPapers' table."];
NewsPapers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'NewsPapers' table."];
NewsPapers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'NewsPapers' table."];

NewsPapers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'NewsPapers' table."];
NewsPapers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'NewsPapers' table."];
NewsPapers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'NewsPapers' table."];
NewsPapers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'NewsPapers' table, regardless of their owner."];

NewsPapers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'NewsPapers' table."];
NewsPapers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'NewsPapers' table."];
NewsPapers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'NewsPapers' table."];
NewsPapers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'NewsPapers' table."];

// Magazines table
Magazines_addTip=["",spacer+"This option allows all members of the group to add records to the 'Magazines' table. A member who adds a record to the table becomes the 'owner' of that record."];

Magazines_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Magazines' table."];
Magazines_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Magazines' table."];
Magazines_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Magazines' table."];
Magazines_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Magazines' table."];

Magazines_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Magazines' table."];
Magazines_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Magazines' table."];
Magazines_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Magazines' table."];
Magazines_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Magazines' table, regardless of their owner."];

Magazines_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Magazines' table."];
Magazines_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Magazines' table."];
Magazines_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Magazines' table."];
Magazines_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Magazines' table."];

// Users table
Users_addTip=["",spacer+"This option allows all members of the group to add records to the 'Users' table. A member who adds a record to the table becomes the 'owner' of that record."];

Users_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Users' table."];
Users_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Users' table."];
Users_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Users' table."];
Users_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Users' table."];

Users_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Users' table."];
Users_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Users' table."];
Users_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Users' table."];
Users_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Users' table, regardless of their owner."];

Users_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Users' table."];
Users_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Users' table."];
Users_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Users' table."];
Users_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Users' table."];

// Book_Issue table
Book_Issue_addTip=["",spacer+"This option allows all members of the group to add records to the 'Issued' table. A member who adds a record to the table becomes the 'owner' of that record."];

Book_Issue_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Issued' table."];
Book_Issue_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Issued' table."];
Book_Issue_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Issued' table."];
Book_Issue_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Issued' table."];

Book_Issue_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Issued' table."];
Book_Issue_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Issued' table."];
Book_Issue_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Issued' table."];
Book_Issue_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Issued' table, regardless of their owner."];

Book_Issue_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Issued' table."];
Book_Issue_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Issued' table."];
Book_Issue_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Issued' table."];
Book_Issue_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Issued' table."];

// Return_Book table
Return_Book_addTip=["",spacer+"This option allows all members of the group to add records to the 'Returned' table. A member who adds a record to the table becomes the 'owner' of that record."];

Return_Book_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Returned' table."];
Return_Book_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Returned' table."];
Return_Book_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Returned' table."];
Return_Book_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Returned' table."];

Return_Book_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Returned' table."];
Return_Book_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Returned' table."];
Return_Book_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Returned' table."];
Return_Book_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Returned' table, regardless of their owner."];

Return_Book_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Returned' table."];
Return_Book_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Returned' table."];
Return_Book_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Returned' table."];
Return_Book_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Returned' table."];

// Types table
Types_addTip=["",spacer+"This option allows all members of the group to add records to the 'Types' table. A member who adds a record to the table becomes the 'owner' of that record."];

Types_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Types' table."];
Types_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Types' table."];
Types_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Types' table."];
Types_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Types' table."];

Types_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Types' table."];
Types_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Types' table."];
Types_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Types' table."];
Types_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Types' table, regardless of their owner."];

Types_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Types' table."];
Types_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Types' table."];
Types_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Types' table."];
Types_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Types' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
