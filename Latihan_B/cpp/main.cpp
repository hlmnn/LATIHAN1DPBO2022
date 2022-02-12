#include "FootballTeamList.cpp"

using namespace std;

int main()
{
    int year;
    string team, country, player;

    // teamlist1
    FootballTeamList teamlist1;
    teamlist1.setTeam("Arsenal");
    teamlist1.setCountry("United_Kingdom");
    teamlist1.setYear(1886);
    teamlist1.setPlayer("Nicolas_Pepe");

    // teamlist2
    cin >> team;
    cin >> country;
    cin >> year;
    cin >> player;
    FootballTeamList teamlist2(team, country, year, player);

    // teamlist1 output
    cout << "Team Name : " << teamlist1.getTeam() << endl;
    cout << "Country : " << teamlist1.getCountry() << endl;
    cout << "Year Founded : " << teamlist1.getYear() << endl;
    cout << "Player Name : " << teamlist1.getPlayer() << endl;

    cout << endl;

    // teamlist2 output
    cout << "Team Name : " << teamlist2.getTeam() << endl;
    cout << "Country : " << teamlist2.getCountry() << endl;
    cout << "Year Founded : " << teamlist2.getYear() << endl;
    cout << "Player Name : " << teamlist2.getPlayer() << endl;

    return 0;
}