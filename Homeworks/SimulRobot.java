public class SimulRobot{
	public static void main(String[] args) {

		Robot myRobot = new Robot("WalyFaye 0.0.1");
		do{
           myRobot.sePromener();
		}while(myRobot.niveau > 0);
	}
}
