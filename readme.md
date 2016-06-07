# SS TB Racers #

## Dev Phase Two! ##

### Lineages ###
* Write queries for viewing all ancestors or descendants of a horse
* After a Horse is created, automatically create a blank lineage record with 'id' => 'horse_id'

### Users ###
* After User is created:
* If corresponding Person does not exist:
* Automatically create Person with 'name' => 'username'.
* Otherwise, link records

### Performance & Quality ###
* Check fonts for faux bold/italic rendering
* Move theme-specific styles from custom.css to theme.css
* Check page load times
* Load js files on 'as needed'; no massive js for all pages*

### Eloquent ORM ###
* Create Model relationships
* Rewrite queries with proper joins

### New Pages ###
* Stable
* Include statistics on horses and races
  * Examples
    * Horse with highest win ratio
    * No. of first place finishes
    * No. of 1st-5th finishes
    * Most common breeder and hexer
* Race
  * Include entries and race information

### Data Tables ###
* Server-side paging/sorting/filtering
* Controllers should return data in JSON format
