public class TestLivre{
	public static void main(String[] args) {
        
	//Création des trois livres
		Livre l1 = new Livre("Ibrahima Fall","The Back-End Philosophy",300,50.05);
		Livre l2 = new Livre("Sigmund Freud","Le moi et le Ça",442);
     //Affichage des livres 
		System.out.println(l1);//case -> prix fixé
		System.out.println(l2);//case -> prix non fixé
	}
}
