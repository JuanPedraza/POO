class  Main {
    public static void main(String[] args) {
        Car car = new Car("AMQ123", new Account("Marcus Fenix", "AND123"));
        car.passenger = 4;
        car.printDataCar();        

    }
}