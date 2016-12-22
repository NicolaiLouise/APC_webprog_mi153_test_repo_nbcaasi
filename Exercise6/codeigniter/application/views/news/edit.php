<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['User_ID']); ?>
	<table>
        <tr>
            <td><label for="Name">Name</label></td>
            <td><textarea name="Name" rows="10" cols="40"><?php echo $news_item['Name'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><textarea name="Nickname" rows="10" cols="40"><?php echo $news_item['Nickname'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="Email">Email</label></td>
            <td><textarea name="Email" rows="10" cols="40"><?php echo $news_item['Email'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="Home_Address">Home Address</label></td>
            <td><textarea name="Home_Address" rows="10" cols="40"><?php echo $news_item['Home_Address'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><textarea name="Gender" rows="10" cols="40"><?php echo $news_item['Gender'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="Cp_Num">Cellphone number</label></td>
            <td><textarea name="Cp_Num" rows="10" cols="40"><?php echo $news_item['Cp_Num'] ?></textarea></td>
        </tr>
		<tr>
            <td><label for="Comment">Comment</label></td>
            <td><textarea name="Comment" rows="10" cols="40"><?php echo $news_item['Comment'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>
