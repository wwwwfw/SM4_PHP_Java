public class Test {
    public static void main(String[] artgs){
        try {

            String encryptStr = Sm4Util.encryptEcb("1234567890abcdef","你行得");
            System.out.println(encryptStr);
            encryptStr = "93bc151dc9b013c0994f3727db3b6725";
            String decrypt = Sm4Util.decryptEcb("1234567890abcdef",encryptStr);
            System.out.println(decrypt);
            if(Sm4Util.verifyEcb("1234567890abcdef",encryptStr,"你行得")){
                System.out.println("ok");
            }
        } catch (Exception e) {
            e.printStackTrace();
        } finally {
        }
    }
}
