public class FootballTeamList 
{
    private String team;
    private String country;
    private String year;
    private String player;

    // with constructor
    public FootballTeamList(String team, String country, String year, String player){
        this.team = team;
        this.country = country;
        this.year = year;
        this.player = player;
    }

    public FootballTeamList(){
    }

    // set Team Name 
    public void setTeam(String team) {
        this.team = team;
    }
     // get Team Name 
     public String getTeam() {
        return team;
    }

    // set Country 
    public void setCountry(String country) {
        this.country = country;
    }
    // get Country 
    public String getCountry() {
        return country;
    }

    // set Year 
    public void setYear(String year) {
        this.year = year;
    }
    // get Year 
    public String getYear() {
        return year;
    }
    
    // set Country 
    public void setPlayer(String player) {
        this.player = player;
    }
    // get Country 
    public String getPlayer() {
        return player;
    }
}