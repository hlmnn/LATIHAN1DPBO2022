import java.util.*;

public class Main {
    public static void main(String[] args) {
        String team, country, year, player;
        
        // teamlist1 with setter
        FootballTeamList teamlist1 = new FootballTeamList();
        teamlist1.setTeam("Arsenal");
        teamlist1.setCountry("United_Kingdom");
        teamlist1.setYear("1886");
        teamlist1.setPlayer("Nicolas_Pepe");

        // teamlist2 with constructor
        Scanner sc = new Scanner(System.in);
        team = sc.nextLine();
        country = sc.nextLine();
        year = sc.nextLine();
        player = sc.nextLine();
        sc.close();
        FootballTeamList teamlist2 = new FootballTeamList(team, country, year, player);

        // teamlist1 output
        System.out.println("Team Name : " + teamlist1.getTeam());
        System.out.println("Country : " + teamlist1.getCountry());
        System.out.println("Year Founded : " + teamlist1.getYear());
        System.out.println("Player Name : " + teamlist1.getPlayer());

        System.out.println("\n"); // new line

        // teamlist2 output
        System.out.println("Team Name : " + teamlist2.getTeam());
        System.out.println("Country : " + teamlist2.getCountry());
        System.out.println("Year Founded : " + teamlist2.getYear());
        System.out.println("Player Name : " + teamlist2.getPlayer());
    }
}
