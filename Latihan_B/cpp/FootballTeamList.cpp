#include <string>
#include <iostream>

using namespace std;

class FootballTeamList
{
    private:
        string team;
        string country;
        int year;
        string player;

    public:
        // constructor
        FootballTeamList(string team, string country, int year, string player){
            this->team = team;
            this->country = country;
            this->year = year;
            this->player = player;
        }

        FootballTeamList(){
        }

        // set Team Name
        void setTeam(string team)
        {
            this->team = team;
        }
        // set Team Name
        string getTeam()
        {
            return this->team;
        }

        // set Country
        void setCountry(string country)
        {
            this->country = country;
        }
        // set Country
        string getCountry()
        {
            return this->country;
        }

        // set Year
        void setYear(int year)
        {
            this->year = year;
        }
        // set Year
        int getYear()
        {
            return this->year;
        }

        // set Player Name
        void setPlayer(string player)
        {
            this->player = player;
        }
        // set Player Name
        string getPlayer()
        {
            return this->player;
        }

        // destructor
        ~FootballTeamList(){
        };
};