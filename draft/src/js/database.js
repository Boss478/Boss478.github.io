// Test connection function using API
export async function testConnection() {
    try {
        const response = await fetch('http://localhost:3000/api/test-connection');
        const data = await response.json();
        
        if (data.status === 'success') {
            console.log(data.message);
            return true;
        } else {
            throw new Error(data.message);
        }
    } catch (error) {
        console.error('Database connection error:', error);
        return false;
    }
}