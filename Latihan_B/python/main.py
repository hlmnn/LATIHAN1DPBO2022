from FootballTeamList import FootballTeamList

# teamlist1 using setter
teamlist1 = FootballTeamList()
teamlist1.setTeam('Arsenal')
teamlist1.setCountry('United_Kingdom')
teamlist1.setYear(1886)
teamlist1.setPlayer('Nicolas_Pepe')

# teamlist2 using constructor
team = str(input())
country = str(input())
year = int(input())
player = str(input())
teamlist2 = FootballTeamList(team, country, year, player)

# teamlist1 output
print("Team Name : " + str(teamlist1.getTeam())) 
print("Country : " + str(teamlist1.getCountry())) 
print("Year Founded : " + str(teamlist1.getYear())) 
print("Player Name : " + str(teamlist1.getPlayer()))

print("\n")

# teamlist2 output
print("Team Name : " + str(teamlist2.getTeam())) 
print("Country : " + str(teamlist2.getCountry())) 
print("Year Founded : " + str(teamlist2.getYear())) 
print("Player Name : " + str(teamlist2.getPlayer())) 