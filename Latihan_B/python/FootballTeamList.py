class FootballTeamList():
    # private
    __team = ''
    __country = ''
    __year = 0
    __player = ''

    def __init__(self, team='', country='', year=0, player=''):
        self.__team = team
        self.__country = country
        self.__year = year
        self.__player = player

    # set Team
    def setTeam(self, team):
        self.__team = team
    # get Team
    def getTeam(self):
        return self.__team

    # set Country
    def setCountry(self, country):
        self.__country = country
    # get Country
    def getCountry(self):
        return self.__country

    # set Year
    def setYear(self, year):
        self.__year = year
    # get Year
    def getYear(self):
        return self.__year

    # set Player Name
    def setPlayer(self, player):
        self.__player = player
    # get Player Name
    def getPlayer(self):
        return self.__player