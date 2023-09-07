<?php
require('actions/questions/updateDatabases.php');
?>

<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta name="robots" content="index" />

<meta name="description" content="See the Terms of Service information for use of the Instant Borrow website. Please read the following terms & conditions carefully.">	

	
<title>Terms & Conditions - Instant Borrow</title>

<!-- icons generated with https://favicomatic.com/ -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/images/pageicons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/pageicons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/pageicons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/pageicons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/images/pageicons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/images/pageicons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/images/pageicons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/images/pageicons/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="assets/images/pageicons/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="assets/images/pageicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="assets/images/pageicons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="assets/images/pageicons/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="assets/images/pageicons/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="assets/images/pageicons/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="assets/images/pageicons/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="assets/images/pageicons/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="assets/images/pageicons/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="assets/images/pageicons/mstile-310x310.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<style>

.header {
	width: 100%;
	height: 75px;
	border-bottom: 1px solid #d6d6d6;
	position: fixed;
	background-color: white;
	z-index: 10;
	box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
}

.header-text {
	margin-left: 10%;
	width: 80%;
}

.logo {
	height: 23px;
	margin-top: 26px;
}

.logo-image {
	height: 62px;
	width: auto;
	margin-top: -20px;
}

.logo-image-footer {
	height: 75px;
	width: auto;
	margin-top: 10px;
}

.lend {
	width: 75px;
	text-align: center;
	height: 23px;
	margin-top: -23px;
	margin-left: calc(47% - 44px);
}

.lend-text {
	font-weight: 500;
	border-radius: 0.125rem;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 10px;
	padding-right: 10px;
	outline: 1px solid #4d4d4d;
	color: #4d4d4d;
	transition: background-color 0.2s;
}

.lend-text:hover {
	background-color: #4d4d4d;
	color: white;
}

.borrow {
	width: 75px;
	height: 23px;
	margin-top: -23px;
	margin-left: calc(47% + 44px);
}

.borrow-text {
	background-color: #00c4ff;
	color: white;
	font-weight: 500;
	border-radius: 0.125rem;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 10px;
	padding-right: 10px;
	outline: 1px solid #00c4ff;
	transition: background-color 0.2s;
}

.borrow-text:hover {
	background-color: #2b80ff;
	outline: 1px solid #2b80ff;
}


.login {
	width: 75px;
	height: 23px;
	margin-top: -23px;
	margin-left: calc(100% - 175px);
}

.login-text {
	font-weight: 500;
	color: #4d4d4d;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 10px;
	padding-right: 10px;
	transition: outline 0.2s;
	transition: background-color 0.2s;
}

.login-text:hover {
	outline: 1px solid #4d4d4d;
	background-color: #fcfcfc;
	border-radius: 0.125rem;
}

.signup {
	width: 85px;
	height: 23px;
	margin-top: -23px;
	margin-left: calc(100% - 85px);
}

.signup-text {
	background-color: #e0c22d;
	color: white;
	font-weight: 500;
	border-radius: 0.125rem;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 10px;
	padding-right: 10px;
	outline: 1px solid #e0c22d;
	transition: background-color 0.2s;
}

.signup-text:hover {
	background-color: #f7d631;
	outline: 1px solid #f7d631;
}

.everything-except-header {
	position: absolute;
	width: 100%;
}

.message-container {
	margin-top: 200px;
	margin-left: 10%;
	margin-bottom: 120px;
	width: 80%;
}

.message-title {
	font-size: 2.85rem;
	font-weight: bold;
	color: #00c4ff;
	text-align: center;
}

.message-subtitle {
	margin-top: -10px;
	font-size: 1.85rem;
	font-weight: bold;
}

.message-button {
	margin-top: 50px;
	background-color: #2b80ff;
	color: white;
	font-weight: bold;
	font-size: 1.65rem;
	border-radius: 0.125rem;
	border: 0px;
	padding: 10px;
	outline: 1px solid #2b80ff;
	transition: background-color 0.2s;
}

.message-button:hover {
	background-color: #00c4ff;
	outline: 1px solid #00c4ff;
}

.footer {
	z-index: 10;
	width: 100%;
	margin-top: 80px;
	background-color: white;
	padding-top: 10px;
	padding-bottom: 10px;
	border-top: 1px solid #d6d6d6;
	box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(0, 0, 0, 0.12);
}




.footer-content {
	margin-top: 20px;
	margin-left: 10%;
	width: 80%;
}

.footer-1 {
	height: 150px;
	width: 25%;
}

.footer-2 {
	height: 150px;
	width: 25%;
	margin-left: 25%;
	margin-top: -150px;
}

.footer-3 {
	height: 150px;
	width: 25%;
	margin-left: 50%;
	margin-top: -150px;
}

.footer-4 {
	height: 150px;
	width: 25%;
	margin-left: 75%;
	margin-top: -150px;
}

.footer-subsection-title {
	font-weight: 500;
	font-size: 1.07rem;
	margin-bottom: 20px;
}

.footer-subsection-text {
	font-size: 0.95rem;
	margin-bottom: 8px;
	color: #2b2b2b;
}

.footer-link {
	text-decoration: none;
	color: #2b2b2b;
}

.footer-bottom {
	text-align: center;
	margin-bottom: 15px;
}

.social-widgets {
	margin-top: 15px;
	margin-bottom: 15px;
}

.widget {
	height: 34px;
	width: 34px;
	margin: 8px;
	transition: transform 0.2s;
}

.widget:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}

.footer-bottom-text {
	font-size: 0.86rem;
	color: #2b2b2b;
}
</style>

</head>


<body style="margin: 0px; font-family: 'Poppins', sans-serif; background-color: #f7f7f7;">

<div class="header">
	<div class="header-text">
		<div class="logo"><a href="about.php" style="text-decoration: none; color: black"><img src="assets/images/logo.png" class="logo-image"></a></div>
		<div class="lend"><a href="index.php" style="text-decoration: none; color: black"><span class="lend-text">Lend</span></a></div>
		<div class="borrow"><a href="borrow.php" style="text-decoration: none; color: black"><span class="borrow-text">Borrow</span></a></div>
		<div class="login"><a href="login.php" style="text-decoration: none; color: black"><span class="login-text">Login</span></a></div>
		<div class="signup"><a href="signup.php" style="text-decoration: none; color: black"><span class="signup-text">Sign Up</span></a></div>
	</div>
</div>

<div class="everything-except-header">


<div class="message-container">

<h1 class="message-title">Instant Borrow Terms Of Use</h1>

<p>Acceptance of the Terms of Use</p>
<p>These terms of use are entered into by and between you and Lendee APP LLC (“Company”, “we” or “us”). The following terms and conditions, together with any documents they expressly incorporate by reference (collectively, these “Terms of Use”), govern your access to and use of the Lendee platform and related services, whether through a mobile or desktop application (collectively, the “Platform”), including any content, functionality and services offered on or through the Platform, whether as a guest or a registered user.
Please read these Terms of Use carefully before you start to use the Platform. By using the Platform or by clicking to accept or agree to the Terms of Use when this option is made available to you, you accept and agree to be bound and abide by these Terms of Use and our Privacy Policy, found at https://Lendee.com/privacy-policy/, incorporated herein by reference. If you do not want to agree to these Terms of Use or the Privacy Policy, you must not access or use the Platform.
The Platform is offered and available to users who are 18 years of age or older and reside in the United States or any of its territories or possessions. By using the Platform, you represent and warrant that you are of legal age to form a binding contract with the Company and meet all of the foregoing eligibility requirements. If you do not meet all of these requirements, you must not access or use the Platform.</p>

<p>Changes to the Terms of Use</p>
<p>We may revise and update these Terms of Use from time to time in our sole discretion. All changes are effective immediately when we post them, and apply to all access to and use of the Platform thereafter. However, any changes to the dispute resolution provisions set forth in Governing Law and Jurisdiction below will not apply to any disputes for which the parties have actual notice prior to the date the change is posted on the Platform.
Your continued use of the Platform following the posting of revised Terms of Use means that you accept and agree to the changes. You are expected to check this page frequently so you are aware of any changes, as they are binding on you. If the changes include material changes that affect your rights or obligations, we will notify you in advance of the changes by reasonable means, which could include notification through the Platform or via email.</p>

<p>Accessing the Platform and Account Security</p>
<p>We reserve the right to withdraw or amend the Platform, and any service or material we provide on the Platform, in our sole discretion without notice. We will not be liable if for any reason all or any part of the Platform is unavailable at any time or for any period. From time to time, we may restrict access to some parts of the Platform, or the entire Platform, to users, including registered users. You are responsible for making all arrangements necessary for you to have access to the Platform.
To access the Platform or some of the resources it offers, including the ability to apply for a loan or lend to a borrower, you may be asked to provide certain registration details or other information. It is a condition of your use of the Platform that all the information you provide on the Platform is correct, current and complete. You agree that all information you provide to register with the Platform or otherwise, including but not limited to through the use of any interactive features on the Platform, is governed by our Privacy Policy posted at https://Lendee.com/privacy-policy/ and on the Platform, and you consent to all actions we take with respect to your information consistent with our Privacy Policy.
If you choose, or are provided with, a username, password or any other piece of information as part of our security procedures, you must treat such information as confidential, and you must not disclose it to any other person or entity. You also acknowledge that your account is personal to you and agree not to provide any other person with access to the Platform or portions of it using your username, password or other security information. You agree to notify us immediately of any unauthorized access to or use of your username or password or any other breach of security. You also agree to ensure that you exit from your account at the end of each session. You should use particular caution when accessing your account from a public or shared device so that others are not able to view or record your password or other personal information.
We have the right to disable any username, password or other identifier, whether chosen by you or provided by us, at any time in our sole discretion for any or no reason, including if, in our opinion, you have violated any provision of these Terms of Use, our Privacy Policy or any other agreement between you and the Company.</p>

<p>Intellectual Property Rights</p>
<p>The Platform and its entire contents, features and functionality (including but not limited to all information, software, text, displays, images, video and audio, and the design, selection and arrangement thereof), are owned by the Company, its licensors or other providers of such material and are protected by United States and international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws.
Subject to the terms and conditions herein, the Company hereby grants you a personal, worldwide, royalty-free, non-assignable, non-exclusive, revocable, and non-sublicensable license to access and use the Platform. This license is for the sole purpose of letting you use and enjoy the Platform’s benefits as intended by the Company and permitted by these Terms of Use. Therefore, you agree not to:
use the Platform or any content contained in the Platform for any commercial purposes other than: (i) in the case of lenders, to make informed decisions in offering cash-based loans and engaging with potential borrowers; or (ii) in the case of borrowers, posting loan requests and engaging with potential lenders; unless you have obtained our prior written consent.
copy, modify, transmit, create any derivative works from, make use of, or reproduce in any way any copyrighted material, images, trademarks, trade names, service marks, or other intellectual property, content or proprietary information accessible through the Platform without the Company’s prior written consent.
express or imply that any statements you make are endorsed by the Company
use any robot, bot, spider, crawler, scraper, site search/retrieval application, proxy or other manual or automatic device, method or process to access, retrieve, index, “data mine,” or in any way reproduce or circumvent the navigational structure or presentation of the Platform or its contents.
use the Platform in any way that could interfere with, disrupt or negatively affect the Platform or the servers or networks connected to the Platform.
upload viruses or other malicious code or otherwise compromise the security of the Platform.
forge headers or otherwise manipulate identifiers in order to disguise the origin of any information transmitted to or through the Platform.
“frame” or “mirror” any part of the Platform without the Company’s prior written authorization.
use meta tags or code or other devices containing any reference to the Company or the Platform (or any trademark, trade name, service mark, logo or slogan of the Company) to direct any person to any other application or website for any purpose.
modify, adapt, sublicense, translate, sell, reverse engineer, decipher, decompile or otherwise disassemble any portion of the Platform, or cause others to do so.
use or develop any third-party applications that interact with the Platform or other User Contributions (as defined below) or user information without our prior written consent.
use, access, or publish the Platform application programming interface without our written consent.
probe, scan or test the vulnerability of the Platform or any system or network.
encourage or promote any activity that violates these Terms of Use.
The Company may investigate and take any available legal action in response to illegal and/or unauthorized uses of the Platform, including termination of your account.
Any software or application that we provide you may automatically download and install upgrades, updates, or other new features. You may be able to adjust these automatic downloads through your device’s settings.
As discussed herein, these Terms of Use permit you to use the Platform for your personal, non-commercial use only. You agree to abide by all applicable laws and regulations in your use of the Platform and products and services offered on the Platform. In addition, you must not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store or transmit any of the material on our Platform, except as follows:
Your computer or mobile device may temporarily store copies of such materials in RAM incidental to your accessing and viewing those materials.
You may store files that are automatically cached by your Web browser, computer or mobile device for display enhancement purposes.
If you print, copy, modify, download or otherwise use or provide any other person with access to any part of the Platform in breach of the Terms of Use, your right to use the Platform will cease immediately and you must, at our option, return or destroy any copies of the materials you have made. No right, title or interest in or to the Platform or any content on the Platform is transferred to you, and all rights not expressly granted are reserved by the Company. Any use of the Platform not expressly permitted by these Terms of Use is a breach of these Terms of Use and may violate copyright, trademark and other laws.</p>

<p>Trademarks</p>
<p>The Company name, the Company logo and all related names, logos, product and service names, designs and slogans are trademarks of the Company or its affiliates or licensors. You must not use such marks without the prior written permission of the Company. All other names, logos, product and service names, designs and slogans on the Platform are the trademarks of their respective owners.</p>

<p>Prohibited Uses</p>
<p>You may use the Platform only for lawful purposes and in accordance with these Terms of Use.
You agree not to use the Platform:
In any way that violates any applicable federal, state, local or international law or regulation (including, without limitation, any laws regarding the export of data or software to and from the US or other countries).
For the purpose of exploiting, harming or attempting to exploit or harm minors in any way by exposing them to inappropriate content, asking for personally identifiable information or otherwise.
To send, knowingly receive, upload, download, use or re-use any material which does not comply with the Content Standards below [INSERT AS LINK TO CONTENT STANDARDS BELOW].
To transmit, or procure the sending of, any advertising or promotional material without our prior written consent, including any “junk mail”, “chain letter” or “spam” or any other similar solicitation.
To impersonate or attempt to impersonate the Company, a Company employee, another user or any other person or entity (including, without limitation, by using e-mail addresses or screen names associated with any of the foregoing).
To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of the Platform, or which, as determined by us, may harm the Company or users of the Platform or expose them to liability.
Additionally, you agree not to:
Use the Platform in any manner that could disable, overburden, damage, or impair the Platform or interfere with any other party’s use of the Platform, including their ability to engage in real time activities through the Platform.
Use any manual process to monitor or copy any of the material on the Platform or for any other unauthorized purpose without our prior written consent.
Otherwise attempt to interfere with the proper working of the Platform.</p>

<p>User Contributions</p>
<p>The Platform may contain message boards, chat rooms, personal pages or profiles, forums, bulletin boards, features enabling interactions between lenders and borrowers and other interactive features (collectively, “Interactive Services”) that allow users to post, submit, publish, display or transmit to other users or other persons (hereinafter, “post”) content or materials (collectively, “User Contributions”) on or through the Platform.
All User Contributions must comply with the Content Standards set out in these Terms of Use.
Except as set forth herein and our Privacy Policy relating to personal information you provide us and to potential lenders, any User Contribution you post to the Platform will be considered non-confidential and non-proprietary. By providing any User Contribution on the Platform, you grant us and our affiliates and service providers, and each of their and our respective licensees, successors and assigns the right to use, reproduce, modify, perform, display, distribute and otherwise disclose to third parties any such material for any purpose.
You represent and warrant that:
You own or control all rights in and to the User Contributions and have the right to grant the license granted above to us and our affiliates and service providers, and each of their and our respective licensees, successors and assigns.
All of your User Contributions do and will comply with these Terms of Use.
You understand and acknowledge that you are responsible for any User Contributions you submit or contribute, and you, not the Company, have full responsibility for such content, including its legality, reliability, accuracy, and appropriateness.
We are not responsible, or liable to any third party, for the content or accuracy of any User Contributions posted by you or any other user of the Platform.</p>

<p>Monitoring and Enforcement; Termination</p>
<p>We have the right to:
Remove or refuse to post any User Contributions for any or no reason in our sole discretion.
Take any action with respect to any User Contribution that we deem necessary or appropriate in our sole discretion, including if we believe that such User Contribution violates the Terms of Use, including the Content Standards, infringes any intellectual property right or other rights of any person or entity, threatens the personal safety of users of the Platform or the public or could create liability for the Company.
Disclose your identity or other information about you to any third party who claims that material posted by you violates their rights, including their intellectual property rights or their right to privacy.
Take appropriate legal action, including without limitation, referral to law enforcement, for any illegal or unauthorized use of the Platform.
Terminate or suspend your access to all or part of the Platform for any or no reason, including without limitation, any violation of these Terms of Use.
Without limiting the foregoing, we have the right to fully cooperate with any law enforcement authorities or court order requesting or directing us to disclose the identity or other information of anyone posting any materials on or through the Platform. YOU WAIVE AND HOLD HARMLESS THE COMPANY AND ITS AFFILIATES, LICENSEES AND SERVICE PROVIDERS FROM ANY CLAIMS RESULTING FROM ANY ACTION TAKEN BY ANY OF THE FOREGOING PARTIES DURING OR AS A RESULT OF ITS INVESTIGATIONS AND FROM ANY ACTIONS TAKEN AS A CONSEQUENCE OF INVESTIGATIONS BY EITHER SUCH PARTIES OR LAW ENFORCEMENT AUTHORITIES.
However, we cannot review all material before it is posted on the Platform, and cannot ensure prompt removal of objectionable material after it has been posted. Accordingly, we assume no liability for any action or inaction regarding transmissions, communications or content provided by any user or third party. We have no liability or responsibility to anyone for performance or nonperformance of the activities described in this section.</p>

<p>Content Standards</p>
<p>These content standards apply to any and all User Contributions and use of Interactive Services. User Contributions must in their entirety comply with all applicable federal, state, local and international laws and regulations. Without limiting the foregoing, User Contributions must not:
Contain any material which is defamatory, obscene, indecent, abusive, offensive, harassing, violent, hateful, inflammatory or otherwise objectionable.
Promote sexually explicit or pornographic material, violence, or discrimination based on race, sex, religion, nationality, disability, sexual orientation or age.
Infringe any patent, trademark, trade secret, copyright or other intellectual property or other rights of any other person.
Violate the legal rights (including the rights of publicity and privacy) of others or contain any material that could give rise to any civil or criminal liability under applicable laws or regulations or that otherwise may be in conflict with these Terms of Use and our Privacy Policy located at https://Lendee.com/privacy-policy.
Be likely to deceive any person.
Promote any illegal activity, or advocate, promote or assist any unlawful act.
Cause annoyance, inconvenience or needless anxiety or be likely to upset, embarrass, alarm or annoy any other person.
Impersonate any person, or misrepresent your identity or affiliation with any person or organization.
Involve commercial activities or sales, such as contests, sweepstakes and other sales promotions, barter or advertising.
Give the impression that they emanate from or are endorsed by us or any other person or entity, if this is not the case.</p>

<p>Copyright Infringement</p>
<p>If you believe that your work has been copied and posted on the Platform in a way that constitutes copyright infringement, please provide our Copyright Agent with the following information:

an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest;

a description of the copyrighted work that you claim has been infringed;

a description of where the material that you claim is infringing is located on the Platform (and such description must be reasonably sufficient to enable us to find the alleged infringing material);

your contact information, including address, telephone number and email address;

a written statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; and

a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner’s behalf.

Notice of claims of copyright infringement should be provided to support@Lendee.com.

The Company will terminate the accounts of repeat infringers.</p>

<p>Reliance on Information Posted</p>
<p>The information presented on or through the Platform is made available solely for general information purposes. We do not warrant the accuracy, completeness or usefulness of this information. Any reliance you place on such information is strictly at your own risk. We disclaim all liability and responsibility arising from any reliance placed on such materials by you or any other visitor to the Platform, or by anyone who may be informed of any of its contents.
The Platform may include content provided by third parties, including materials provided by other users, bloggers and third-party licensors, syndicators, aggregators and/or reporting services. All statements and/or opinions expressed in these materials, and all articles and responses to questions and other content, other than the content provided by the Company, are solely the opinions and the responsibility of the person or entity providing those materials. These materials do not necessarily reflect the opinion of the Company. We are not responsible, or liable to you or any third party, for the content or accuracy of any materials provided by any third parties.</p>


<p>Changes to the Platform</p>
<p>We may update the content on the Platform from time to time, but its content is not necessarily complete or up-to-date. Any of the material on the Platform may be out of date at any given time, and we are under no obligation to update such material.</p>

<p>Information About You and Your Visits to the Platform
All information we collect on the Platform is subject to our Privacy Policy available at https://Lendee.com/privacy-policy. By using the Platform, you consent to all actions taken by us with respect to your information in compliance with the Privacy Policy.

Linking to the Platform and Social Media Features
You may link to the Platform, provided you do so in a way that is fair and legal and does not damage our reputation or take advantage of it, but you must not establish a link in such a way as to suggest any form of association, approval or endorsement on our part without our express written consent.

The Platform may provide certain social media features that enable you to:

Link from your own or certain third-party Platforms to certain content on the Platform.

Send e-mails or other communications with certain content, or links to certain content, on the Platform.

Cause limited portions of content on the Platform to be displayed or appear to be displayed on your own or certain third-party Platforms.

You may use these features solely as they are provided by us and solely with respect to the content they are displayed with and otherwise in accordance with any additional terms and conditions we provide with respect to such features, including those set forth in our Privacy Policy. Subject to the foregoing, you must not:

Establish a link from any Platform that is not owned by you.

Cause the Platform or portions of it to be displayed, or appear to be displayed by, for example, framing, deep linking or in-line linking, on any other platform or site.

Otherwise take any action with respect to the materials on the Platform that is inconsistent with any other provision of these Terms of Use.

The Platform from which you are linking, or on which you make certain content accessible, must comply in all respects with the Content Standards set out in these Terms of Use.

You agree to cooperate with us in causing any unauthorized framing or linking immediately to cease. We reserve the right to withdraw linking permission without notice.

We may disable all or any social media features and any links at any time without notice in our discretion.

Links from the Platform
If the Platform contains links to other platforms, sites and resources provided by third parties, these links are provided for your convenience only. This includes links contained in advertisements, including banner advertisements and sponsored links. We have no control over the contents of those platforms, sites or resources, and accept no responsibility for them or for any loss or damage that may arise from your use of them. If you decide to access any of the third party platforms linked to the Platform, you do so entirely at your own risk and subject to the terms and conditions of use for such Platforms.

Geographic Restrictions
The owner of the Platform is based in the State of California in the United States. We provide the Platform for use only by persons located in the United States. We make no claims that the Platform or any of its content is accessible or appropriate outside of the United States. Access to the Platform may not be legal by certain persons or in certain countries. If you access the Platform from outside the United States, you do so on your own initiative and are responsible for compliance with local laws.

Disclaimer of Warranties
You understand that we cannot and do not guarantee or warrant that files available for downloading from the internet or the Platform will be free of viruses or other destructive code. You are responsible for implementing sufficient procedures and checkpoints to satisfy your particular requirements for anti-virus protection and accuracy of data input and output, and for maintaining a means external to our site for any reconstruction of any lost data. WE WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE CAUSED BY A DISTRIBUTED DENIAL-OF-SERVICE ATTACK, VIRUSES OR OTHER TECHNOLOGICALLY HARMFUL MATERIAL THAT MAY INFECT YOUR MOBILE DEVICES, COMPUTER EQUIPMENT, COMPUTER PROGRAMS, DATA OR OTHER PROPRIETARY MATERIAL DUE TO YOUR USE OF THE PLATFORM OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE PLATFORM OR TO YOUR DOWNLOADING OF ANY MATERIAL POSTED ON IT, OR ON ANY PLATFORM LINKED TO IT.

YOUR USE OF THE PLATFORM, ITS CONTENT AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE PLATFORM IS AT YOUR OWN RISK. THE PLATFORM, ITS CONTENT AND ANY SERVICES OR ITEMS OBTAINED THROUGH THE PLATFORM ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS, WITHOUT ANY WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED. NEITHER THE COMPANY NOR ANY PERSON ASSOCIATED WITH THE COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY OR AVAILABILITY OF THE PLATFORM. WITHOUT LIMITING THE FOREGOING, NEITHER THE COMPANY NOR ANYONE ASSOCIATED WITH THE COMPANY REPRESENTS OR WARRANTS THAT THE PLATFORM, ITS CONTENT OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE PLATFORM WILL BE ACCURATE, RELIABLE, ERROR-FREE OR UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT OUR PLATFORM OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE PLATFORM OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE PLATFORM WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS.

THE COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT AND FITNESS FOR PARTICULAR PURPOSE.

THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.

Limitation on Liability
IN NO EVENT WILL THE COMPANY, ITS AFFILIATES OR THEIR LICENSORS, SERVICE PROVIDERS, EMPLOYEES, AGENTS, OFFICERS OR DIRECTORS BE LIABLE FOR DAMAGES OF ANY KIND, UNDER ANY LEGAL THEORY, ARISING OUT OF OR IN CONNECTION WITH YOUR USE, OR INABILITY TO USE, THE PLATFORM, ANY PLATFORMS LINKED TO IT, ANY CONTENT ON THE PLATFORM OR SUCH OTHER PLATFORMS OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE PLATFORM OR SUCH OTHER PLATFORMS, INCLUDING ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL OR PUNITIVE DAMAGES, INCLUDING BUT NOT LIMITED TO, PERSONAL INJURY, PAIN AND SUFFERING, EMOTIONAL DISTRESS, LOSS OF REVENUE, LOSS OF PROFITS, LOSS OF BUSINESS OR ANTICIPATED SAVINGS, LOSS OF USE, LOSS OF GOODWILL, LOSS OF DATA, AND WHETHER CAUSED BY TORT (INCLUDING NEGLIGENCE), BREACH OF CONTRACT OR OTHERWISE, EVEN IF FORESEEABLE.

THE FOREGOING DOES NOT AFFECT ANY LIABILITY WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.

Indemnification
You agree to defend, indemnify and hold harmless the Company, its affiliates, licensors and service providers, and its and their respective officers, directors, employees, contractors, agents, licensors, suppliers, successors and assigns from and against any claims, liabilities, damages, judgments, awards, losses, costs, expenses or fees (including reasonable attorneys’ fees) arising out of or relating to your violation of these Terms of Use or your use of the Platform, including, but not limited to, your User Contributions, any use of the Platform’s content, services and products other than as expressly authorized in these Terms of Use or your use of any information obtained from the Platform.

Arbitration, Class-Action Waiver, and Jury Waiver; Governing Law
READ THIS SECTION CAREFULLY BECAUSE IT REQUIRES THE PARTIES TO ARBITRATE THEIR DISPUTES AND LIMITS THE MANNER IN WHICH YOU CAN SEEK RELIEF FROM THE COMPANY. For any dispute or claim with the Company arising out of or relating to these Terms of Use (including any alleged breach thereof) or the Platform, you agree to first contact us at support@Lendee.com and attempt to resolve the dispute with us informally. In the unlikely event that we have not been able to resolve a dispute after sixty (60) days, the exclusive means of resolving any dispute shall be BINDING ARBITRATION administered by the JAMS, under the Optional Expedited Arbitration Procedures then in effect for JAMS, except as provided herein. JAMS may be contacted at www.jamsadr.com. The arbitration will be conducted in Alameda County, California, unless you and the Company agree otherwise. The one exception to the exclusivity of arbitration is that you have the right to bring an individual claim against us in a small-claims court of competent jurisdiction, though this does not absolve you of your commitment to engage in the informal dispute resolution process. But whether you choose arbitration or small-claims court, you may not under any circumstances commence or maintain against us any class action, class arbitration, or other representative action or proceeding.

If you are using the Platform for commercial purposes, each party will be responsible for paying any JAMS filing, administrative and arbitrator fees in accordance with JAMS rules, and the award rendered by the arbitrator shall include costs of arbitration, reasonable attorneys’ fees and reasonable costs for expert and other witnesses. If you are an individual using the Platform for non-commercial purposes: (i) JAMS may require you to pay a fee for the initiation of your case, unless you apply for and successfully obtain a fee waiver from JAMS; and (ii) the award rendered by the arbitrator may include your costs of arbitration, your reasonable attorney’s fees, and your reasonable costs for expert and other witnesses.

By using the Platform in any manner, you agree to the above arbitration agreement. In doing so, YOU GIVE UP YOUR RIGHT TO GO TO COURT to assert or defend any claims between you and Lendee (except for matters that may be taken to small-claims court). Your rights will be determined by a NEUTRAL ARBITRATOR, NOT A JUDGE OR JURY, and the arbitrator shall determine all issues regarding the arbitrability of the dispute. You are entitled to a fair hearing before the arbitrator. The arbitrator can grant any relief that a court can, but you should note that arbitration proceedings are usually simpler and more streamlined than trials and other judicial proceedings. Decisions by the arbitrator are enforceable in court and may be overturned by a court only for very limited reasons. For details on the arbitration process, see the JAMS website at www.jamsadr.com.

Any proceeding to enforce this arbitration agreement, including any proceeding to confirm, modify, or vacate an arbitration award, may be commenced in any court of competent jurisdiction. In the event that this arbitration agreement is for any reason held to be unenforceable, any litigation against Lendee (except for small-claims court actions) may be commenced only in the federal or state courts located in Alameda County, California. You hereby irrevocably consent to the jurisdiction of those courts for such.

These Terms of Use, and any dispute between you and us, shall be governed by the laws of the State of California without regard to principles of conflicts of law, provided that this arbitration agreement shall be governed by the Federal Arbitration Act. For the avoidance of doubt, the choice of California governing law shall not supersede any mandatory consumer protection legislation in such jurisdictions.

Nothing in this section or in these Terms of Use shall be deemed as preventing us from seeking injunctive or other equitable relief from the courts as necessary to prevent the actual or threatened infringement, misappropriation, or violation of our data security, intellectual property rights or other proprietary rights.

Class Action/Jury Trial Waiver
WITH RESPECT TO ALL PERSONS AND ENTITIES, REGARDLESS OF WHETHER THEY HAVE OBTAINED OR USED THE PLATFORM FOR PERSONAL, COMMERCIAL OR OTHER PURPOSES, ALL CLAIMS MUST BE BROUGHT IN THE PARTIES’ INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS ACTION, COLLECTIVE ACTION, PRIVATE ATTORNEY GENERAL ACTION OR OTHER REPRESENTATIVE PROCEEDING. THIS WAIVER APPLIES TO CLASS ARBITRATION, AND, UNLESS WE AGREE OTHERWISE, THE ARBITRATOR MAY NOT CONSOLIDATE MORE THAN ONE PERSON’S CLAIMS. YOU AGREE THAT, BY ENTERING INTO THIS AGREEMENT, YOU AND THE COMPANY ARE EACH WAIVING THE RIGHT TO A TRIAL BY JURY OR TO PARTICIPATE IN A CLASS ACTION, COLLECTIVE ACTION, PRIVATE ATTORNEY GENERAL ACTION, OR OTHER REPRESENTATIVE PROCEEDING OF ANY KIND.

Waiver and Severability
No waiver of by the Company of any term or condition set forth in these Terms of Use shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of the Company to assert a right or provision under these Terms of Use shall not constitute a waiver of such right or provision.

If any provision of these Terms of Use is held by a court or other tribunal of competent jurisdiction to be invalid, illegal or unenforceable for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of the Terms of Use will continue in full force and effect.

Entire Agreement
The Terms of Use, our Privacy Policy and, in the case of borrower participants, the Lendee Borrower Participation Agreement, and in the case of lender participants, the Lendee Lender Participation Agreement, constitute the sole and entire agreement between you and the Company with respect to the Platform and supersede all prior and contemporaneous understandings, agreements, representations and warranties, both written and oral, with respect to the Platform.

Your Comments and Concerns
The Platform is operated by Lendee, Bake Pkwy Suite 100, Irvine, CA 92618. All feedback, comments, requests for technical support and other communications relating to the Platform should be directed to support@Lendee.com

Microloan Terms
Loan Amount Range - $100 to $2000
Loan Tenure - For a Maximum payment of $2000, it can be more than a year.
For recurring payments, there are different plans available to choose Users can select from 3, 6, or 9 months up to 1 year.Maximum Annual Percentage Rate (Annual Percentage Rate) is the interest rate for a year charged when a borrower requests extra funds through this app. The max APR is 35.99%. It varies per lending option.

Example:
For a loan of $1,000 for 3 months with Microloan fees of $250,
Interest on $1000 = $250 (This is the Max interest that can be charged. )
Processing Fee = $100
The total amount to be paid = Loan Amount + Micro loan fees + Processing Fee = $1,000 + $250+ $100 = $1350
APR = (1350-1000)/1000/91*365 = 35%

Fraud
Lendee reserves the right to stop payments to Investors if any kind of fraud is detected.

Late Payments
If a borrower fails to make a payment within the number of days specified in the loan agreement, the borrower will be charged a late fee of $25. The borrower will be billed the late fee automatically after the payment default.

Collections
Lendee is a first party collector using its own employees within the billing department. Lendee will continue to collect on user accounts that have been sent to collections for past due accounts. Lendee reserves the right to sell or assign all overdue accounts receivable to a third party at any time.

Attorneys Fees
If any legal action, arbitration, or other proceeding of any nature whatsoever is instituted in connection with any controversy arising out of these Terms Of Use, or to interpret or enforce any rights under these terms of Use, the prevailing party may recover reasonable costs and attorney’s fees incurred in such proceeding.

Credit Report Authorization
You authorize Lendee App, LLC, non-bank lending partners or other entities (each, a “Lending Partner”) that may extend credit to you and their respective agents and affiliated companies (together, “We,” “Our,” or “Us”) to obtain credit reports from one or more consumer credit reporting agencies (a) in connection with an application for an extension of credit, (b) in order to consider your eligibility for and to present you with other credit products, offers or services, or (c) at any other time in Our sole discretion during the term of your loan or line of credit. We may use the credit reports for any lawful purpose, including but not limited to (i) for authentication purposes, to make sure you are who you say you are; (ii) to make credit decisions; (iii) for modeling, audit and analysis purposes; (iv) to administer the sale of any Borrower Payment Dependent Notes ("Notes") associated with your loan or the sale of your loan or line of credit in its entirety; (v) to obtain and display information and characteristics from your credit report to potential investors in your loan or Notes associated with your loan including purchasers on a secondary trading platform; and (vi) to market products or services to you. You authorize Us to display information from your credit report on the Lendee website/app in connection with your financial obligation. You authorize Us to verify information in your credit report and your application and/or loan listing, and you agree that We may contact third parties without further notice to you to verify any such information.

Authorization to Debit Account
I hereby authorize Lendee App LLC (“Lendee”), its parent, affiliates, any holder of my loan and their respective agents and their assignees to initiate, depending on the payment method I select on the following page, a single or recurring electronic debit entry/entries to my designated checking or savings account (“Account”) at my designated financial institution (“Financial Institution”) for which I am an authorized user, as well as any Account or Financial Institution I later designate, for payment of the monthly payment(s) on my loan, if my loan originates. I acknowledge that the origination of electronic debits to my Account must be permitted by my Financial Institution, which must be located in the United States.

If I select preauthorized electronic fund transfers as my payment method I agree:

THE AMOUNT DEBITED FROM THE ACCOUNT EACH MONTH WILL BE THE LESSER OF MY OUTSTANDING LOAN BALANCE AND THE PAYMENT LISTED ON THE FINAL TRUTH IN LENDING STATEMENT (“FINAL TIL”) OR ANY SUBSEQUENT DOCUMENT THAT I HAVE EXECUTED TO MODIFY MY LOAN. THE PAYMENT WILL BE DEBITED EACH MONTH ON THE DUE DATE LISTED ON THE FINAL TIL OR THE DUE DATE LISTED ON ANY SUBSEQUENT DOCUMENT THAT I HAVE EXECUTED TO MODIFY MY LOAN; HOWEVER, IF THE DUE DATE OCCURS ON A WEEKEND OR HOLIDAY, THE ACCOUNT WILL BE DEBITED THE NEXT BUSINESS DAY. I UNDERSTAND THAT MY FINAL PAYMENT WILL VARY FROM THE AMOUNT STATED ON THE FINAL TIL OR ANY SUBSEQUENT DOCUMENT THAT I HAVE EXECUTED TO MODIFY MY LOAN IF LENDEE ELECTS TO DEBIT ANY ADDITIONAL UNPAID PRINCIPAL, INTEREST, CHARGES AND/OR FEES. I UNDERSTAND THAT I MUST PAY ALL OUTSTANDING AMOUNTS EVEN IF NOT DEBITED BY Lendee.

If I select a one-time electronic fund transfer followed by manual payments as my payment method I agree:

THE AMOUNT DEBITED FROM MY ACCOUNT ON THE DUE DATE OF MY FIRST PAYMENT WILL BE MY MONTHLY PAYMENT AMOUNT, AS LISTED ON THE FINAL TIL. HOWEVER, IF THE DUE DATE OCCURS ON A WEEKEND OR HOLIDAY, THE ACCOUNT WILL BE DEBITED THE NEXT BUSINESS DAY.

Failed Payments

We will automatically retry failed payments according to the following schedule:

3 days after the first payment attempt

5 days after the second payment attempt

7 days after the third payment attempt

You will also be sent a Failed AutoPay Attempt email. If the payment succeeds at any point then the retry schedule will stop. 

I understand that my authorization will remain in full force and effect until Lendee has received oral or written notification from me at least 3 business days prior to my scheduled transfer to terminate this authorization.</p>

</div>

<div class="footer">
	<div class="footer-content">
		<div class="footer-1">
			<div><img src="assets/images/logo.png" class="logo-image-footer"></div>
		</div>
		<div class="footer-2">
			<div class="footer-subsection-title"><span>Company</span></div>
			<div class="footer-subsection-text"><a href="about.php" class="footer-link" target="blank"><span>About Instant Borrow</span></a></div>
			<div class="footer-subsection-text"><a href="contact.php" class="footer-link" target="blank"><span>Contact Us</span></a></div>
		</div>
		<div class="footer-3">
			<div class="footer-subsection-title"><span>Resources</span></div>
			<div class="footer-subsection-text"><a href="lender-info.php" class="footer-link" target="blank"><span>Lender's Guide</span></a></div>
			<div class="footer-subsection-text"><a href="borrower-info.php" class="footer-link" target="blank"><span>Borrower's Guide</span></a></div>
		</div>
		<div class="footer-4">
			<div class="footer-subsection-title"><span>Legal</span></div>
			<div class="footer-subsection-text"><a href="terms-conditions.php" class="footer-link" target="blank"><span>Terms & Conditions</span></a></div>
			<div class="footer-subsection-text"><a href="privacy-policy.php" class="footer-link" target="blank"><span>Privacy Policy</span></a></div>
		</div>
		<div class="footer-bottom">
			<div class="social-widgets">
			<a href="https://facebook.com" class="footer-link" target="blank"><img class="widget" src="assets/images/facebook-widget.png"></a>
			<a href="https://twitter.com" class="footer-link" target="blank"><img class="widget" src="assets/images/twitter-widget.png"></a>
			<a href="https://instagram.com" class="footer-link" target="blank"><img class="widget" src="assets/images/instagram-widget.png"></a>
			<a href="https://reddit.com" class="footer-link" target="blank"><img class="widget" src="assets/images/reddit-widget.png"></a>
			<a href="https://linkedin.com" class="footer-link" target="blank"><img class="widget" src="assets/images/linkedin-widget.png"></a>
			<a href="https://discord.com" class="footer-link" target="blank"><img class="widget" src="assets/images/discord-widget.png"></a>
			</div>
			<div class="footer-bottom-text"><span>Copyright © 2023 - <?= date("Y"); ?> Instant Borrow. All rights reserved.</span></div>
		</div>
	</div>
</div>

</div>

</body>

</html>
